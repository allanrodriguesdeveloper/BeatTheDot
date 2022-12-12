<?php

error_reporting(0);

require_once "src/config/config.php";

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

if($uri === '/' || $uri === '' ||  $uri === '/index.php') {
    $uri = '/day_records.php';
}

require_once(CONTROLLER_PATH . "/{$uri}");