<?php

use Src\models\User;

require_once "../vendor/autoload.php";

//require_once(dirname(__FILE__, 2) . '/src/config/config.php');
//require_once(dirname(__FILE__, 2) . '/src/models/User.php');

$user = new User([
    'name' => 'Admin',
    'email' => 'admin@admin.com.br'
]);

echo "<pre>";
print_r($user);
echo "</pre>";

$user->email = 'teste@php.com.br';
echo "<pre>";
print_r($user->email);
echo "</pre>";