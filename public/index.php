<?php

require_once(dirname(__FILE__, 2) . '/src/config/config.php');
require_once(dirname(__FILE__, 2) . '/src/models/User.php');

$user = new User(['name' => 'admin', 'email' => 'admin@uniponto.com.br']);

print_r(User::get(['id' => '1'], 'name, email'));