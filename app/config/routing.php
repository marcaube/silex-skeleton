<?php

use Acme\DemoBundle\Controller\HelloController;

// Register Controllers and their dependencies
$app['hello.controller'] = $app->share(function() use ($app) {
    return new HelloController($app['twig']);
});

// Register routes
$app->get('/', 'hello.controller:helloAction');