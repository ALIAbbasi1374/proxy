<?php

route('GET', '/admin/shop/coin', function(){
    return response(
        phtml(__DIR__.'/../view/shop/coin.php')
    );
});