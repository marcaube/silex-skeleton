<?php

ini_set('display_errors', 0);

$app = require_once __DIR__ . '/../app/app.php';

require __DIR__ . '/../app/config/prod.php';

$app->run();