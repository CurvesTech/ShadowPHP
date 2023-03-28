<?php

// require the autoloader.
require('vendor/autoload.php');

use Shadow\Application;
use Shadow\Http\Request;

$app = new Application();
$request = new Request(getallheaders(), $_REQUEST, $_SERVER['REQUEST_METHOD']);


echo $app->process($request);
