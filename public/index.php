<?php

use Src\models\User;

require_once "../vendor/autoload.php";

require_once(dirname(__FILE__, 2) . '/src/config/config.php');
//require_once(dirname(__FILE__, 2) . '/src/views/login.php');


$user = User::get();
$teste = $user > 5 ? 'Tem registro' : 'Não tem registro';
foreach ($user AS $item => $value) {
    echo "<pre>";
    print_r($value);
    echo "</pre>";
}

