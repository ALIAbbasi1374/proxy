<?php

class Session{
    public function getNormalGameInfo($id){
        return db::fetch(
            "SELECT
                `game_normal__stages`.`orderr`,
                `game_normal__list`.`name`
            FROM `game_normal__stages`
            INNER JOIN `game_normal__list` ON `game_normal__list`.`id`=`game_normal__stages`.`_game`
            WHERE `game_normal__stages`.`id`=?",
            [$id]
        );
    }
}