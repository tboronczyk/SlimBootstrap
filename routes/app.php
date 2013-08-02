<?php
$app->get(
    '/',
    function () use ($app, $c) {
        $app->view()->setData(array(
            'title' => 'Hello World',
            'body'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
        ));
        $app->render('index.html');
    }
);

