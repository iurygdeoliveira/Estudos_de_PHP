<?php

declare(strict_types=1);

namespace app\controllers;

use app\databases\models\User;

class Login extends Base
{
    public function index($request, $response)
    {

        // $user = new User();

        // $email = 'iurygdeoliveira@gmail.com';

        // $data = [
        //     "email" => (is_email($email) ? $email : false),
        //     "pass" => passwd('12345')
        // ];

        // if ($user->insert('user', $data) === false) {
        //     var_dump($user->getError());
        // }

        return $this->getTwig()->render($response, $this->setView('login/login'), [
            'sistema' => 'teste',
            'title' => 'Login',
            'link_acesso' => url("admin"),
            'link_forgot' => url("recuperar"),

        ]);
    }

    public function forgot($request, $response)
    {

        return $this->getTwig()->render($response, $this->setView('login/forgot'), [
            'sistema' => 'teste',
            'title' => 'Recuperar senha',
            'link_recovery' => url("renovar"),
            'link_login' => url("login"),
        ]);
    }
}