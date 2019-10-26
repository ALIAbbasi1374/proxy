<?php
$model = new settings;

route('GET', '/webAPI/settings/constant', function () use ($model) {
    return jsonResponse($model->constant());
});

route('POST', '/webAPI/settings/EditConstant', function () use ($model) {
       
    if(!empty($_POST)){
            foreach ($_POST as $key => $value) {
               db::query(
                "UPDATE `constants` SET `value`=? WHERE `name` = ?",
                   [$value,$key]
                                );
            }
                $json['success'] = true;

            }else{
                $json['success'] = false;
            }
    return jsonResponse($json);
});


route('POST', '/webAPI/settings/faq', function () use ($model) {
    return jsonResponse($model->faq());
});

route('POST', '/webAPI/settings/faqAdd', function () use ($model) {
    return jsonResponse($model->faqAdd($_POST['id'],$_POST['question'],$_POST['answer']));
});

route('POST', '/webAPI/settings/deletefaq', function () use ($model) {
    return jsonResponse($model->deletefaq($_POST['id']));
});

route('POST', '/webAPI/settings/rules', function () use ($model) {
    return jsonResponse($model->rules());
});

route('POST', '/webAPI/settings/rulesAdd', function () use ($model) {
    return jsonResponse($model->rulesAdd($_POST['id'],$_POST['title'],$_POST['text']));
});


route('POST', '/webAPI/settings/deleteRules', function () use ($model) {
    return jsonResponse($model->deleteRules($_POST['id']));
});


