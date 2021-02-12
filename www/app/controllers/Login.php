<?php

declare(strict_types=1);

namespace app\controllers;

use app\classes\Flash;
use app\models\User;

class Login extends Base
{
    public function index($request, $response)
    {

        $flashes = Flash::getAll();
        $nameView = $this->nameView(__CLASS__, __FUNCTION__);
        return $this->getTwig()->render(
            $response,
            $this->setView($nameView),
            [
                'sistema' => 'teste',
                'title' => 'Login',
                'flashes' => $flashes,
                'link_acesso' => url("access"),
                'link_forgot' => url("recuperar")
            ]
        );
    }

    public function forgot($request, $response)
    {

        $nameView = $this->nameView(__CLASS__, __FUNCTION__);
        return $this->getTwig()->render(
            $response,
            $this->setView($nameView),
            [
                'sistema' => 'teste',
                'title' => 'Recuperar senha',
                'link_recovery' => url("renovar"),
                'link_login' => url("login"),
            ]
        );
    }

    public function access($request, $response)
    {
        //true = campos preenchidos
        //false = campo obrigatório vazio
        $errors = required(['email', 'senha']);

        if (!empty($errors)) {
            Flash::setFlashes($errors);
            return redirect($response, 'login');
        }

        //Validando formato de email
        if (!is_email($_POST['email'])) {
            Flash::set('email', 'Email informado inválido', 'danger');
            return redirect($response, 'login');
        }


        // $user = new User();

        // $email = 'iurygdeoliveira@gmail.com';

        // $data = [
        //     "email" => (is_email($email) ? $email : false),
        //     "pass" => passwd('12345')
        // ];

        // if ($user->insert('user', $data) === false) {
        //     var_dump($user->getError());
        // }
        //FIXME

        // Obter post de forma segura

        return redirect($response, 'admin');
    }
}