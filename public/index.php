<?php

require "../bootstrap.php";

$app->get('/', 'app\controllers\HomeController:index');
$app->get('/posts', 'app\controllers\PostController:index');


$app->run();