<?php

require_once __DIR__ . '/bootstrap.php';

use Igorw\Silex\ConfigServiceProvider;
use Silex\Application;
use Silex\Provider\ServiceControllerServiceProvider;
use Silex\Provider\TwigServiceProvider;
use Silex\Provider\UrlGeneratorServiceProvider;

$app = new Application();
$app->register(new ConfigServiceProvider(__DIR__ . "/config/config.yml"));
$app->register(new ServiceControllerServiceProvider());
$app->register(new TwigServiceProvider());
$app->register(new UrlGeneratorServiceProvider());
$app['twig'] = $app->share($app->extend('twig', function($twig, $app) {
    return $twig;
}));

return $app;