<?php

class Criminoso
{
    private $nome;
    private $crime;
    private $arma;
    private $id;
    function __construct($nome, $crime, $id)
    {
        $this->nome = $nome;
        $this->crime = $crime;
        $this->id = $id;
    }
    function setArma($arma)
    {
        $this->arma = $arma;
    }
    function setVitima()
    {
    }
}
