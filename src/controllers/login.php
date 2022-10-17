<?php

use Src\exceptions\AppException;
use Src\models\Login;

//loadModel('login');

if (count($_POST) > 0) {
    $login = new Login($_POST);
    try {
        $user = $login->checkLogin();
        echo "Usuario logado {$user->name}";
    } catch (AppException $exception) {
        echo $exception->getMessage();
    }
}

loadView('login');