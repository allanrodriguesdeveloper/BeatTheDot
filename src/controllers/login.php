<?php

use Src\exceptions\AppException;
use Src\models\Login;

$exception = null;

//loadModel('login');

if (count($_POST) > 0) {
    $login = new Login($_POST);
    try {
        $user = $login->checkLogin();
        echo "Usuario logado {$user->name}";
    } catch (AppException $e) {
        $exception = $e;
    }
}

loadView('login', $_POST + ['exception' => $exception]);