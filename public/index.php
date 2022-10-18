<?php

require_once(dirname(__FILE__, 2) . '/src/config/config.php');
require_once(dirname(__FILE__, 2) . '/src/models/User.php');

$user = new User(['name' => 'Allan', 'email' => 'dev@php.com.br']);

echo User::getSelect(['name' => 1], 'name, email');
echo User::getSelect(['name' => 'Chave', 'email' => 'chave@php.com.br'], 'name, email');