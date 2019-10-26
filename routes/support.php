<?php

route('GET', '/admin/support', function(){
    return response(
        phtml(__DIR__.'/../view/support/support.php')
    );
});

