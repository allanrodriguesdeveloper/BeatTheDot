<?php

//require_once (realpath(MODEL_PATH . '/User.php'));

namespace Src\models;

class Login extends Model
{
    public function checkLogin()
    {
        $user = User::getOne(['email' => $this->email]);

    }
}