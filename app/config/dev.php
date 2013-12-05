<?php

use Silex\Provider\MonologServiceProvider;
use Silex\Provider\WebProfilerServiceProvider;

// Include the prod configuration
require __DIR__ . '/prod.php';

// Enable the debug mode
$app['debug'] = true;

// Dev logs
$app->register(new MonologServiceProvider(), array(
    'monolog.logfile' => __DIR__ . '/../logs/silex_dev.log',
));

// Web Debug Toolbar
$app->register($p = new WebProfilerServiceProvider(), array(
    'profiler.cache_dir' => __DIR__ . '/../cache/profiler',
));

$app->mount('/_profiler', $p);