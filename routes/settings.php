<?php

route('GET', '/admin/setting/constant', function(){
    return response(
        phtml(__DIR__.'/../view/settings/constant.php')
    );
});


route('GET', '/admin/setting/rules', function(){
    return response(
        phtml(__DIR__.'/../view/settings/rules.php')
    );
});

route('GET', '/admin/setting/faq', function(){
    return response(
        phtml(__DIR__.'/../view/settings/faq.php')
    );
});