<?php
route('GET', '/admin/offCodes', function(){
    return response(
        phtml(__DIR__.'/../view/premium/offCodes.php')
    );
});

route('GET', '/admin/redeem', function(){
    return response(
        phtml(__DIR__.'/../view/premium/redeem.php')
    );
});

route('GET', '/admin/tapsell/prize', function(){
    return response(
        phtml(__DIR__.'/../view/premium/show-video.php')
    );
});