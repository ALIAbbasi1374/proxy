<?php

class AllowanceManager {
    public function addAllowance($userID, $value, $type, $origin, $originID = '') {
        if (abs($value) == 0) {
            return true;
        }
        db::insert(
            'members__allowance',
            [
                '_members' => $userID,
                'value' => $value,
                'type' => $type,
                'origin' => $origin,
                'originID' => $originID,
                'date' => _DATE,
            ]
        );

        return true;
    }
    public function countAllowance($userID, $type) : int {
        $count = (int) db::fetchColumn('SELECT SUM(`value`) FROM `members__allowance` WHERE `_members`=? AND `type`=?', [$userID, $type])? : 0;
        return $count;
    }

}
