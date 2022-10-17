<?php

use Src\models\Login;

//loadModel('login');

if (count($_POST) > 0) {
    $login = new Login($_POST);
    try {
        $user = $login->checkLogin();

        echo "Usuario logado {$user->name}";
    } catch (Exception $exception) {
        echo 'Falha no login';
    }
}

loadView('login');