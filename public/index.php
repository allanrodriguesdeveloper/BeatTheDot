<?php

require_once(dirname(__FILE__, 2) . '/src/config/config.php');
//require_once(VIEW_PATH . '/login.php');


require_once(MODEL_PATH . '/Login.php');

$login = new Login([
    'email' => 'admin@uniponto.com.br',
    'password' => 'ab'
]);

try {
    $login->checkLogin();
    echo "tudo certo";
} catch (Exception $e) {
    echo $e->getMessage();
}