<?php

class Crime
{
    private $vitima;
    private $criminoso;
    private $arma;
    private $detalhes;
    private $visto;
    function __construct($vitima, $criminoso, $arma, $detalhes, $visto = false)
    {
        $this->vitima = $vitima;
        $this->criminoso = $criminoso;
        $this->arma = $arma;
        $this->detalhes = $detalhes;
        $this->visto = $visto;
    }
    function setVisto($boolean)
    {
        $this->visto = $boolean;
    }
    function getVisto()
    {
        return $this->visto ? 'sim' : 'não';
    }
    function getVitima()
    {
        return $this->vitima;
    }
    function getCriminoso()
    {
        return $this->criminoso;
    }

    function printRelatorio()
    {
        echo "\nA vítima {$this->vitima->nome} sofreu um@ {$this->detalhes} por {$this->criminoso->nome} que estava utilizando um@ {$this->arma->nome} (visto: {$this->getVisto()})";
    }
}
