<?php

declare(strict_types=1);

namespace app\controllers;

use app\classes\Flash;

class Home extends Base
{
    public function index($request, $response)
    {
        return $this->getTwig()->render(
            $response,
            $this->setView($this->nameClass(__CLASS__) . '/' . __FUNCTION__),
            [
                'title' => 'Home',
                'message' => Flash::getMessage(),
                'link_login' => url("login")
            ]

        );
    }
}