<?php

declare(strict_types=1);

namespace classes;

use classes\Pessoa;

class Vitima extends Pessoa
{
    public function criarVitima(array $dados): Vitima
    {
        return parent::criar($dados);
    }
}