<?php

// require the autoloader.
require('vendor/autoload.php');

use Shadow\Application;

$app = new Application();
// $request = new Request(getallheaders(), $_REQUEST, $_SERVER['REQUEST_METHOD']);


echo $app->process();
