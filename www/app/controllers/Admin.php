<?php

declare(strict_types=1);

namespace app\controllers;

class Admin extends Base
{
    public function index($request, $response)
    {

        return $this->getTwig()->render(
            $response,
            $this->setView($this->name(__CLASS__) . '/' . __FUNCTION__),
            [
                'sistema' => 'teste',
                'title' => 'Admin'
            ]
        );
    }
}