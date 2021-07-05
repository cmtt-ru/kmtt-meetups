<?php

require_once '../vendor/autoload.php';

use App\Application;
define('ROOT',dirname(__DIR__));
$application = new Application();
$application->run();
