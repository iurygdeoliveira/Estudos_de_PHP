<?php

declare(strict_types=1);

namespace app\controllers;

class Login extends Base
{
    public function index($request, $response)
    {

        // $user = new User();

        // $data = [
        //     "title" => "Estudando",
        //     "rating" => 12,
        //     "price" => '19.00'
        // ];

        // if ($user->insert('book', $data) === false) {
        //     var_dump($user->getError());
        // }

        return $this->getTwig()->render($response, $this->setView('login'), [
            'sistema' => 'teste',
            'title' => 'Login',
            'link_acesso' => url("admin"),
            'link_forgot' => url("recuperar"),

        ]);
    }

    public function forgot($request, $response)
    {

        return $this->getTwig()->render($response, $this->setView('forgot'), [
            'sistema' => 'teste',
            'title' => 'Recuperar senha',
            'link_recovery' => url("renovar"),
            'link_login' => url("login"),
        ]);
    }
}