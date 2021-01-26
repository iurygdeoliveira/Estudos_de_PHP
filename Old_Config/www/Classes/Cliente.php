<?php

declare(strict_types=1);

namespace classes;



class Cliente
{
    private $biblioteca;

    /**
     * Class constructor.
     */
    public function __construct()
    {
        $this->biblioteca = new Adapter();
    }

    public function principal()
    {
        $this->biblioteca->metodo1();
        $this->biblioteca->metodo2("Iury");
    }
}