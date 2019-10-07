<?php

class example {
    public function get($name,$email) {

        return db::insert(
            'user',
            [
                'name' => $name,
                'email' => $email,
            ]
        ) ? true:false;
        
    }
    public function get2($id) {
        $ret['data'] = $id;
        $ret['success'] = true;

        return $ret;
    }

    public function idprofile($id){

        $res = db::fetch(
            "SELECT * FROM `user` WHERE `id`=?",
            [$id]
        );
        return db::fetchAll("SELECT * FROM `user`");
        return $res;
    }

    public function set($something, $userID) {
        return db::insert(
            'example',
            [
                '_members' => $userID,
                'something' => $something,
            ]
        ) ? true:false;
    }

    public function post($post) {
        return $post;
    }


    

    

}

