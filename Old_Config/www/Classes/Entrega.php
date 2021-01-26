<?php

declare(strict_types=1);

namespace classes;

class Entrega
{
    public $endereco;
    public $cep;
    public $transportadora;

    public function calcularFrete()
    {
        return 200;
    }
}