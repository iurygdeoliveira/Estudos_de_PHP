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
        ];
    }
    public function dashboard($request, $response)
    {
        $nameView = $this->nameView(__CLASS__, __FUNCTION__, __FUNCTION__);
        return $this->getTwig()->render(
            $response,
            $this->setView($nameView),
            $this->data
        );
    }

    public function user($request, $response)
    {

        $nameView = $this->nameView(__CLASS__, __FUNCTION__, __FUNCTION__);
        return $this->getTwig()->render(
            $response,
            $this->setView($nameView),
            $this->data
        );
    }
}