<?php
$model = new members;

route('POST', '/webAPI/members', function () use ($model) {
    return jsonResponse($model->members());
});



route('POST', '/webAPI/profile/gamesHistory/:userID', function ($args) use ($model) {
    return jsonResponse( $model->gamesHistory($args['userID']) );
});


route('POST', '/webAPI/profile/goldenHistory/:userID', function ($args) use ($model) {
    return jsonResponse( $model->goldenHistory($args['userID']) );
});


route('POST', '/webAPI/profile/updateIgnore', function () use ($model) {
    return jsonResponse($model->updateIgnore($_POST['id'],$_POST['idIgnored']));
});

route('POST', '/webAPI/profile/payment', function () use ($model) {
    return jsonResponse($model->payment($_POST['id'],$_POST['isPaid'],$_POST['trackingCode']));
});



route('POST', '/webAPI/profile/goldenHistoryAdd', function () use ($model) {

    return jsonResponse( $model->goldenHistoryAdd($_POST['userID'],$_POST['value'],$_POST['type'],$_POST['origin']) );
});

route('POST', '/webAPI/profile/chat/supportMessages', function () use ($model) {
    return jsonResponse($model->supportMessages($_POST['userID']));
});

route('POST', '/webAPI/profile/chat/supportMessagesAdd', function () use ($model) {
    return jsonResponse($model->supportMessagesAdd($_POST['userID'],$_POST['text']));
});


route('POST', '/webAPI/profile/walletHistory/:userID', function ($args) use ($model) {
    return jsonResponse( $model->walletHistory($args['userID']) );
});


route('POST', '/webAPI/profile/ReferedUsers/:userID', function ($args) use ($model) {
    return jsonResponse( $model->ReferedUsers($args['userID']) );
});


