<?php

class Arma
{
    private $nome;
    private $criminoso;
    private $id;

    function __construct($nome, $criminoso, $id)
    {
        $this->nome = $nome;
        $this->$id = $id;
        $criminoso->setArma($this->id);
        $this->criminoso = $criminoso->id;
    }
}
