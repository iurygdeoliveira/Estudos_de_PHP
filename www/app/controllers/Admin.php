<?php

declare(strict_types=1);

namespace app\controllers;

class Admin extends Base
{
    private $data;
    /**
     * Class constructor.
     */
    public function __construct()
    {
        $this->data = [
            'title' => 'Dashboard',
            'sistema' => 'teste',
            'version' => '0.0.1',
            'year' => date('Y'),
            'link_admin' => url('admin'),
            'link_user' => url('user'),
            'link_home' => url(),
        ];
    }
    public function dashboard($request, $response)
    {
        // Ativando classes específicas do CSS para renderizar os estilos na sidebar
        $this->data += [
            'screen' => 'Dashboard',
            'dashboard' => true,
            'user' => false
        ];

        $nameView = $this->nameView(__CLASS__, __FUNCTION__);
        return $this->getTwig()->render(
            $response,
            $this->setView($nameView),
            $this->data
        );
    }

    public function user($request, $response)
    {
        // Ativando classes específicas do CSS para renderizar os estilos na sidebar
        $this->data += [
            'screen' => 'Usuário',
            'dashboard' => false,
            'user' => true
        ];

        $nameView = $this->nameView(__CLASS__, __FUNCTION__);
        return $this->getTwig()->render(
            $response,
            $this->setView($nameView),
            $this->data
        );
    }
}