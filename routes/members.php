<?php

route('GET', '/admin/members', function(){
    return response(
        phtml(__DIR__.'/../view/members/members.php')
    );
});

route('GET', '/admin/members-blocked', function(){
    return response(
        phtml(__DIR__.'/../view/members/members-blocked.php')
    );
});



route('GET', '/admin/members/:id', function($args){
    $userInfo = db::fetch(
        "SELECT * FROM `members` WHERE`id`=?",
        [ $args['id'] ]
    ) ;

    $AM = new AllowanceManager;
    $silver = $AM->countAllowance($args['id'], 'silver' );
    $golden = $AM->countAllowance($args['id'], 'golden' );
    return response(
        phtml(
            __DIR__.'/../view/members/members-profile.php',
            [
                'id' => $args['id'],
                'silver' => $silver,
                'golden' => $golden,
                'userInfo' => $userInfo
            ]
        )
    );
});

