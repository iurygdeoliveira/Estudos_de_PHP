<?php

declare(strict_types=1);

namespace classes;



class BibliotecaAntiga
{
    public function salvarNoBanco()
    {
        echo "Dado salvo no banco de dados! <br>";
    }

    public function gerarRelatorioTXT($name)
    {
        echo "Relatorio gerado: $name.txt";
    }
}