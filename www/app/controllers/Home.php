<?php

declare(strict_types=1);

namespace app\controllers;

use app\classes\Flash;

class Home extends Base
{
    public function index($request, $response)
    {
        $nameView = $this->nameView(__CLASS__, __FUNCTION__);
        return $this->getTwig()->render(
            $response,
            $this->setView($nameView),
            [
                'title' => 'Home',
                'link_login' => url("login")
            ]

        );
    }

    public function error($request, $response)
    {
        $nameView = $this->nameView(__CLASS__, __FUNCTION__);
        return $this->getTwig()->render(
            $response,
            $this->setView($nameView),
            [
                'title' => 'Erro',
                'link_home' => url()
            ]

        );
    }
}