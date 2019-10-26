<?php

class Wallet {
    public function walletHistory($userID) {
        $ret['list'] = db::fetchAll(
            'SELECT
                `value`,
                `timestamp`,
                `description`
            FROM `members__wallet`
            WHERE `_members`=?',
            [$userID]
        );

        $jdf = new jdf();
        $util = new Utils;

        for ($i = 0;$i < count($ret['list']);$i++) {
            $ret['list'][$i]['timestamp'] = $jdf->timestamp__persian($ret['list'][$i]['timestamp'], '/', '', true, false);
            $ret['list'][$i]['value'] = $util->cashFormat($ret['list'][$i]['value']);
        }

        return $ret;
    }

    public function reqPayHistory($userID) {
        $ret['list'] = db::fetchAll(
            'SELECT
                `reqValue`,
                `trackingCode`,
                `isPaid`,
                `ignored`,
                `reqDate`
            FROM `payments__out`
            WHERE `_members`=?
            ORDER BY `id` DESC', [$userID]
        );

        $jdf = new jdf();
        $util = new Utils;

        for ($i = 0;$i < count($ret['list']);$i++) {
            $ret['list'][$i]['status'] = $ret['list'][$i]['isPaid'];
            $ret['list'][$i]['desc'] = 'در صف انتظار';

            if ($ret['list'][$i]['ignored'] == 1 && $ret['list'][$i]['isPaid'] != 1) {
                $ret['list'][$i]['desc'] = 'با پشتیبانی تماس بگیرید';
                $ret['list'][$i]['status'] = -1;
            }
            if ($ret['list'][$i]['isPaid'] == 1) {
                $ret['list'][$i]['desc'] = 'واریز شد';
                $ret['list'][$i]['reqDate'] = $ret['list'][$i]['payDate'];
            }
            $ret['list'][$i]['trackingCode'] = (string) $ret['list'][$i]['trackingCode'] ? : '';
            $ret['list'][$i]['date'] = $jdf->timestamp__persian($ret['list'][$i]['reqDate'], '/', '', true, false);
            unset(
                $ret['list'][$i]['reqDate'],
                $ret['list'][$i]['payDate'],
                $ret['list'][$i]['isPaid'],
                $ret['list'][$i]['ignored']
            );
        }

        return $ret;
    }

    public function reqPay($card, $userID) {
        $ret['value'] = $this->getWallet($userID);

        $dialog = new Dialog;
        db::query('UPDATE `members` SET `cardNum`=? WHERE `id`=?', [$card, $userID]) ? true:false;
        if ($ret['value'] >= (int) IO::$CONST['wallet__min_pay']) {
            $ret['success'] = true;
            $ret['dialog'] = $dialog
            ->new()
            ->title('تبریک!')
            ->message('درخواست شما با موفقیت ثبت شد.' . PHP_EOL . 'تا 2 روز کاری دیگر به حساب شما واریز خواهد')
            ->style('success')
            ->cancel('بستن', '#cancel')
            ->make();

            $this->paymentsOut($userID, $ret['value']);
            $this->addToWallet($userID, -(int) $ret['value'], 'wallet_req', '0', 'درخواست برداشت');
            $ret['value'] = 0;
        } else {
            $ret['id'] = $userID;
            $ret['success'] = false;
            $ret['dialog'] = $dialog
            ->new()
            ->title('خطا')
            ->message('دوست گرامی' . PHP_EOL . 'حداقل مبلغ قابل برداشت 20,000 هزار تومان میباشد.')
            ->style('danger')
            ->cancel('بستن', '#cancel')
            ->make();
        }
        //$ret['loginData'] = $user->properties( $userID );

        return $ret;
    }

    private function paymentsOut($userID, $reqValue) {
        $util = new Utils;
        $TEL = new Telegram;
        $TEL->SendMessage(
            '☹️ خروجی: <code>' . $util->cashFormat($reqValue) . '</code> تومان' . PHP_EOL .
            '👤 کاربر: <a href="https://p.qday-app.com?u=' . $userID . '">' . '</a> - <code>' . $userID . '</code>' . PHP_EOL . PHP_EOL .
            '#wallet_cash ' . '#U_' . $userID,
            true,
            'LOG_CHANEL'
        );

        return db::insert(
            'payments__out',
            [
                '_members' => $userID,
                'reqValue' => $reqValue,
                'date' => _DATE,
            ]
        ) ? true:false;
    }

    public function addToWallet($userID, $value, $origin, $originID, $description = null, $sessionID = null) {
        return db::insert(
            'members__wallet',
            [
                '_members' => $userID,
                'value' => $value,
                'origin' => $origin,
                'originID' => $originID,
                'description' => $description,
            ]
        )? true:false;
    }

    public function getWallet($userID) : int {
        return (int) db::fetchColumn('SELECT SUM(`value`) FROM `members__wallet` WHERE `_members`=?', [$userID]);
    }

    public function getWalletTotal($userID) : int {
        return (int) db::fetchColumn('SELECT SUM(`value`) FROM `members__wallet` WHERE `_members`=? AND `value`>0', [$userID]);
    }

    public function convertTo($userID, $to) {
        if (!in_array($to, ['silver', 'golden'])) {
            http_response_code(400);
            exit();
        }
        $dialog = new Dialog;
        $currentCash = $this->getWallet($userID);
        $typeValue = (int) IO::$CONST["wallet__convert_cash_2_{$to}_value"];
        $count = (int) ($currentCash / $typeValue);
        if ($count <= 0) {
            return [
                'success' => false,
                $ret['dialog'] => $dialog
                    ->new()
                    ->title('خطا')
                    ->message(
                        'حداقل مبلغ تبدیل به ' .
                        CURRENCY_FA[$to] .
                        '، ' .
                        $typeValue .
                        ' تومان می‌باشد!'
                    )
                    ->style('danger')
                    ->cancel('بستن', '#cancel')
                    ->make(),
            ];
        }
        $cashToMinus = $count * $typeValue;

        $this->addToWallet($userID, -$cashToMinus, 'convert', $to);
        $AM = new AllowanceManager;
        $AM->addAllowance($userID, $count, $to, 'convert');
        $user = new Users;

        return [
            'success' => true,
            'loginData' => $user->loginData($userID),
            $ret['dialog'] => $dialog
                ->new()
                ->title('خطا')
                ->message(
                    $count . ' ' .
                    CURRENCY_FA[$to] .
                    ' دریافت کردید!'
                )
                ->style('success')
                ->cancel('بستن', '#cancel')
                ->make(),
        ];

        return $ret;
    }

    private function convertString($value, $convertRate, $coinNameFa) {
        $newCoin = intval($value / $convertRate);

        return
            $newCoin > 0 ?
            'موجودی کیف پول شما معادل ' . $newCoin . ' سکه ' . $coinNameFa . ' می‌باشد' :
            'موجودی شما برای تبدیل به سکه ' . $coinNameFa . ' کافی نمی‌باشد.';
    }
    public function getValueWithSession($sessionID){
        return db::fetchColumn(
            "SELECT `value` FROM `members__wallet` WHERE `_session`=?",
            [$sessionID]
        );
    }

}
