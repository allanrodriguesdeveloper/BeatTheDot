<?php

require_once(dirname(__FILE__, 2) . '/src/config/config.php');
require_once(dirname(__FILE__, 2) . '/src/models/User.php');

$user = new User(['name' => 'Allan', 'email' => 'dev@php.com.br']);

echo "<pre>";
print_r($user);
echo "</pre>";
