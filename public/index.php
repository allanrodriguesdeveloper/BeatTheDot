<?php

use Src\models\User;

require_once "../vendor/autoload.php";

//require_once(dirname(__FILE__, 2) . '/src/config/config.php');
//require_once(dirname(__FILE__, 2) . '/src/models/User.php');

$user = new User([
    'name' => 'Allan',
    'email' => 'allan@php.com.br'
]);

print_r($user);
echo ' - FIM';