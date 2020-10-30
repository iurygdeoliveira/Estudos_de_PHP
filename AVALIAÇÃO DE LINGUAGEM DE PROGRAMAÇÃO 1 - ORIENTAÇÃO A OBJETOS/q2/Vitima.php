<?php

class Vitima
{
    public $nome;
    private $idade;
    private $cpf;
    function __construct($nome, $idade, $cpf)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->cpf = $cpf;
    }
}
