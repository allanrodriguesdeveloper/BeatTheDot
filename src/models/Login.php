<?php

<<<<<<< HEAD
=======
namespace Src\models;

use Exception;
use Src\exceptions\AppException;

>>>>>>> a3c04c2551286ad1388caca5dbdfe97eb59dbb5c
class Login extends Model
{
    public function checkLogin()
    {
        $user = User::getOne(['email' => $this->email]);
        if ($user) {

            if ($user->end_date) {
                throw new AppException('Usuário está desligado da empresa');
            }

            if (password_verify($this->password, $user->password)) {
                return $user;
            }
        }
        throw new AppException('Usuário e Senha inválidos');
    }
}