<?php

declare(strict_types=1);

namespace app\controllers;

use app\databases\models\User;
use \RedBeanPHP\R;

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
            'title' => 'Login',
        ]);
    }

    public function register($request, $response)
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
            'title' => 'Login',
        ]);
    }

    public function forgot($request, $response)
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
            'title' => 'Login',
        ]);
    }
}