<?php

declare(strict_types=1);

namespace classes;

class Crime
{
    public $identificacao;
    public $hora;
    public $data;
    public $local;
    public $idArma;
    public $idVitima;
    public $idCriminoso;

    public function criarCrime(array $dados): Crime
    {
        $this->identificacao = uniqid(strval(rand()), true);

        $this->hora = $dados['hora'];
        $this->data = $dados['data'];
        $this->local = $dados['local'];
        $this->idArma = $dados['idArma'];
        $this->idVitima = $dados['idVitima'];
        $this->idCriminoso = $dados['idCriminoso'];

        return $this;
    }
}