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
            $this->setView('home/home'),
            [
                'title' => 'Home',
                'message' => Flash::getMessage()
            ]

        );
    }
}