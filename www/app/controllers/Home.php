<?php

declare(strict_types=1);

namespace app\controllers;

use app\classes\Flash;

class Home extends Base
{
    public function index($request, $response)
    {

        Flash::set('message', 'Cadastrado com sucesso');
        $flash = Flash::get('message');

        return $this->getTwig()->render(
            $response,
            $this->setView('home/home'),
            [
                'title' => 'Home',
                'mensagem' => $flash['message'],
            ]

        );
    }
}