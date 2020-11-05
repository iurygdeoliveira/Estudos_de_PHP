<?php

declare(strict_types=1);

namespace classes;

class Arma
{
    public $identificacao;
    public $tipo;
    public $tamanho;
    public $peso;

    public function criarArma(
        array $dados
    ): Arma {

        $this->identificacao = $dados['identificacao'];
        $this->tipo = $dados['tipo'];
        $this->tamanho = $dados['tamanho'];
        $this->peso = $dados['peso'];
        return $this;
    }
}