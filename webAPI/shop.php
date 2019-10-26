<?php

$model = new shop;

route('POST', '/webAPI/shop/coin', function () use ($model) {
    return jsonResponse( $model->coin() );
});



route('POST', '/webAPI/shop/updateIsVisible', function () use ($model) {
    return jsonResponse( $model->updateIsVisible($_POST['id'],$_POST['isVisible']));
});

route('POST', '/webAPI/coinAdd', function () use ($model) {
 
   return jsonResponse( $model->coinAdd($_POST['id'], $_POST['name'],$_POST['quantity'],$_POST['price'],$_POST['fullPrice']));
   
});
