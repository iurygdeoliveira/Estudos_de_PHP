<?php

declare(strict_types=1);

namespace classes;

class Estoque
{
    public static function retornarPrecoDoProdutoPeloID($id)
    {
        if ($id = 10) {
            return 1000;
        } else {
            return 0;
        }
    }
}