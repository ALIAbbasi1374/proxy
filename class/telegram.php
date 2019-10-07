<?php

class Telegram{
    private $token = 'TOKEN';
    private $chatID = [
        'LOG_CHANEL'          => 'LOG_CHANEL',
        'GEEKY_LOG'           => 'GEEKY_LOG',
        'APP_CRASH_REPORT'    => 'APP_CRASH_REPORT',
        'SERVER_CRASH_REPORT' => 'SERVER_CRASH_REPORT',
        'SUPPORT'             => 'SUPPORT'
    ];

    public function SendMessage($messaage, $silent = false, $target ) {
        $url = "https://api.telegram.org/bot{$this->token}/sendMessage?";
        $params = [
            'chat_id'              => $this->chatID[$target],
            'parse_mode'           => 'HTML',
            'disable_notification' => $silent,
            'text'                 => urlencode($messaage)
        ];
        foreach ($params as $key => $value) {
            $url .= "{$key}={$value}&";
        }
        $url = rtrim($url, '&');

        $ch = curl_init();
        $optArray = array(
            CURLOPT_URL            => $url,
            CURLOPT_RETURNTRANSFER => true
        );
        curl_setopt_array($ch, $optArray);
        $result = curl_exec($ch);
        $result = json_decode($result, true);
        $result['httpCode'] = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        return $result;
    }
}