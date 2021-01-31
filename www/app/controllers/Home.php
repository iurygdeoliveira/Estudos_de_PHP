<?php

declare(strict_types=1);

namespace app\controllers;

class Home extends Base
{
    public function index($request, $response)
    {
        return $this->getTwig()->render($response, $this->setView("home"), [
            'title' => 'Home',
            'class_css_in_body' => "" // NO HOME NÃO EXISTE CSS
        ]);
    }
}