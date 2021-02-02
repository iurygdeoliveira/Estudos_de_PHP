<?php

declare(strict_types=1);

namespace app\controllers;

class Admin extends Base
{
    public function index($request, $response)
    {

        return $this->getTwig()->render($response, $this->setView('admin'), [
            'sistema' => 'teste',
            'title' => 'Admin'
        ]);
    }
}