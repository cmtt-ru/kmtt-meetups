<?php

require_once '../vendor/autoload.php';

use App\Application;
//var_dump($_SERVER);
//$url = $_SERVER['REQUEST_URI'] ?? '';
//$url_info=parse_url($url);
//$path=$url_info['path'];
//var_dump($path);
//die();
$application = new Application();
$application->run();