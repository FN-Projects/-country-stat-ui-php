<?php

require_once __DIR__. '/vendor/autoload.php';
//require_once __DIR__ . '/tests/test.php';

use Core\Application;

$app = new Application();
$app->run();
