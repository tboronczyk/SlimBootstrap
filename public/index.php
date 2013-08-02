<?php
require_once '../vendor/autoload.php';

// depedency injection container
$c = require '../include/services.php';

// sane runtime environment
$config = $c['config'];
error_reporting($config['php.error_reporting']);
ini_set('display_errors', $config['php.display_errors']);
ini_set('log_errors', $config['php.log_errors']);
ini_set('error_log', $config['php.error_log']);
date_default_timezone_set($config['php.date.timezone']);

session_start();

// load routes and run application
$app = $c['app'];
foreach (glob($config['path.routes'] . '*php') as $file) {
    require_once $file;
}
$app->run();
