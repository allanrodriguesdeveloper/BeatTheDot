<?php

use Src\models\Login;
use Src\models\User;

require_once "../vendor/autoload.php";

require_once(dirname(__FILE__, 2) . '/src/config/config.php');
//require_once(VIEW_PATH . '/login.php');

$user = new Login([
    'email' => 'admin@uniponto.com.br',
    'password' => 'a'
]);

try {
//    echo "<pre>";
//   print_r( $user->checkLogin());
//   echo "</pre>";
    echo "Tudo certo";
} catch (\Exception $exception) {
    echo "Problema no login";
}