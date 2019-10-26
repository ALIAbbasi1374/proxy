<?php

route('GET', '/login', function(){
    return response(
        phtml(__DIR__.'/../view/pages-login.php')
    );
});


route('GET', '/logout', function(){
    return response(
        phtml(__DIR__.'/../view/pages-logout.php')
    );
});

route('GET', '/register', function(){
    return response(
        phtml(__DIR__.'/../view/pages-register.php')
    );
});




route('GET', '/', function(){
    return response(
        phtml(__DIR__.'/../view/index.php')
    );
});


