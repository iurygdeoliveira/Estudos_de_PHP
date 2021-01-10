<?php

declare(strict_types=1);

namespace classes;

use interfaces\MetodosInterfaces;
use classes\BibliotecaAntiga;

class Adapter extends BibliotecaNova implements MetodosInterfaces
{
    public function metodo1()
    {
        $this->salvarNoBanco();
    }

    public function metodo2($name)
    {
        $this->gerarRelatorioTXT($name);
    }
}