<?php

declare(strict_types=1);

namespace classes;

use classes\Pessoa;

class Criminoso extends Pessoa
{
    public function criarCriminoso(array $dados): Criminoso
    {
        return parent::criar($dados);
    }
}