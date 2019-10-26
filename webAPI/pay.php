<?php
$model = new pay;

route('POST', '/webAPI/pay-in', function () use ($model) {
    return jsonResponse($model->pay_in());
});

route('POST', '/webAPI/pay-out', function () use ($model) {
    return jsonResponse($model->pay_out());
});

route('POST', '/webAPI/pay/payment', function () use ($model) {
    return jsonResponse($model->payment($_POST['id'],$_POST['isPaid'],$_POST['trackingCode']));
});

route('POST', '/webAPI/pay-out/updateIgnore', function () use ($model) {
    return jsonResponse($model->updateIgnore($_POST['id'],$_POST['idIgnored']));
});


route('POST', '/webAPI/profile/pay-req-user/:userID', function ($args) use ($model) {
    return jsonResponse( $model->pay_req_user($args['userID']) );
});