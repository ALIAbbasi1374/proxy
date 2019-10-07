<?php
$model = new proxy;

route('GET', '/proxy/address', function () use ($model) {
    return jsonResponse($model->check());
});

