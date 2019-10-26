<?php 
route('GET', '/admin/game/pic', function(){
    return response(
        phtml(__DIR__.'/../view/questions and pictures/pic.php')
    );
});

route('GET', '/admin/questions/all', function(){
    return response(
        phtml(__DIR__.'/../view/questions and pictures/questions-all.php')
    );
});

route('GET', '/admin/questions/sug', function(){
    return response(
        phtml(__DIR__.'/../view/questions and pictures/questions-sug.php')
    );
});



