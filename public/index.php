<?php

require_once(dirname(__FILE__, 2) . '/src/config/config.php');

/**
 * Layout
 */
require_once(VIEW_PATH . '/login.php');


$user = new Login([
    'email' => 'admin@uniponto.com.br',
    'password' => 'a'
]);

try {
    $user->checkLogin();
} catch (\Exception $exception) {
    echo "Problema no login";
}