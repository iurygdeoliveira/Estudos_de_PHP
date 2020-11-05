<?php

declare(strict_types=1);

namespace classes;

class Pessoa
{
    public $nome;
    public $peso;
    public $altura;
    public $documento;

    public function criar(array $dados): Pessoa
    {
        $this->nome = $dados['nome'];
        $this->peso = $dados['peso'];
        $this->altura = $dados['altura'];
        $this->documento = $dados['documento'];
        return $this;
    }
}