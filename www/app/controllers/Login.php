<?php

declare(strict_types=1);

namespace app\controllers;

class Login extends Base
{
    public function index($request, $response)
    {
        return $this->getTwig()->render($response, $this->setView('login'), [
            'title' => 'Login',
            'class_css_in_body' => "class='hold-transition login-page'"
        ]);
    }
}