<?php
$model = new support;

route('POST', '/webAPI/support', function () use ($model) {
    return jsonResponse($model->support());
});


