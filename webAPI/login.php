<?php
$model = new Authorization;

route('POST', '/webAPI/login', function () use ($model) {
    return jsonResponse($model->login($_POST['email'], $_POST['password']));
});


route('POST', '/webAPI/register', function () use ($model) {
    return jsonResponse($model->register($_POST['name'],$_POST['email'],$_POST['password'],$_POST['password_conf']));
});