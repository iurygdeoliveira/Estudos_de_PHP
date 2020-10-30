<?php

class Arma
{
    public $nome;
    private $tipo;


    function __construct($nome, $tipo)
    {
        $this->nome = $nome;
        $this->$tipo = $tipo;
    }
}
