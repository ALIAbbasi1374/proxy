<?php
route('GET', '/admin/pay-req', function(){
    return response(
        phtml(__DIR__.'/../view/pay/pay-out.php')
    );
});

route('GET', '/admin/pay-transactions', function(){
    return response(
        phtml(__DIR__.'/../view/pay/pay-in.php')
    );
});
