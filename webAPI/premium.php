<?php
$model =new premium;
route('POST', '/webAPI/offCodes', function () use ($model) {
    return jsonResponse( $model->offCodes() );
});

route('POST', '/webAPI/redeem', function () use ($model) {
    return jsonResponse( $model->redeem() );
});

route('POST', '/webAPI/show-video', function () use ($model) {
    return jsonResponse( $model->daily() );
});

route('POST', '/webAPI/offCodesAdd', function () use ($model) {

    return jsonResponse( $model->offCodesAdd($_POST['id'], $_POST['name'],$_POST['perc'],$_POST['user_limit'],$_POST['time_limit'],$_POST['active']) );
    
    
});


route('POST', '/webAPI/redeemAdd', function () use ($model) {
  
   return jsonResponse( $model->redeemAdd($_POST['id'], $_POST['code'],$_POST['type'],$_POST['value'],$_POST['user_limit'],$_POST['time_limit'],$_POST['active']));
   
});


route('POST', '/webAPI/toggle/offCode', function () use ($model) {
    return jsonResponse( $model->toggleOffcodes($_POST['id'],$_POST['active']));
});

route('POST', '/webAPI/toggle/redeem', function () use ($model) {
    return jsonResponse( $model->toggleRedeem($_POST['id'],$_POST['active']));
});

