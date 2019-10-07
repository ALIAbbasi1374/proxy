<?php
$model = new example;

route('GET', '/example/get/:name/:email', function ($args) use ($model) {
    return jsonResponse($model->get($args['name'],$args['email']));
});

// route('GET', '/example/get/:id/:name', function ($args) use ($model) {
    // return jsonResponse($model->get2($args['id']));
// });


route('GET','/profile/get/:id',function($args)use($model){

    return jsonResponse($model->idprofile($args['id']));
});
route('POST', '/example/post', function () use ($model) {
    // return jsonResponse($model->post($_POST));
    return jsonResponse($model->post(IO::$body));
});


route('GET', '/example/get2/:name/:family', function ($args) use ($model) {
  //  $model = new Members;
    // $data = $model->getUserData( $args['id'] );
    return response(
        phtml(
            __DIR__ . '/../view/panel/profile.php',
            [
                'name' => $args['name'],
                'family' => $args['family'],
            ]
        )
    );
});




route('Get', '/example/test2', function ($args) use ($model) {

    return response(

        phtml(
            __DIR__ . '/../view/panel/index.php',
            [
                'id' => $args['id'],
                'name' => $args['name'],
                ]
        )

    );
});



