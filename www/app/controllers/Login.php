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
        //     "title" => "Estudando RedBeansPHP",
        //     "rating" => 10,
        //     "price" => '29.99'
        // ];

        // if ($user->insert('book', $data) === false) {
        //     var_dump($user->getError());
        // }

        return $this->getTwig()->render($response, $this->setView('login'), [
            'title' => 'Login',
        ]);
    }
}