<?php

require_once(dirname(__FILE__, 2) . '/src/config/config.php');
require_once(dirname(__FILE__, 2) . '/src/models/User.php');

$user = new User(['name' => 'Allan', 'email' => 'dev@php.com.br']);

echo "<pre>";
print_r($user);
echo "</pre>";

$user->email = 'op@photmail.com';
echo "<pre>";
print_r($user->email);
echo "</pre>";
//
//
//$result = Database::getResultFromQuery('SELECT * FROM users');
//
//while ($row = $result->fetch_assoc()) {
//    echo "<pre>";
//    print_R($row);
//    echo "</pre>";
//}