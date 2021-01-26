<?php

declare(strict_types=1);

namespace classes;



class BibliotecaNova
{
    public function salvarNoBanco()
    {
        echo "Dado salvo no banco de dados! <br>";
        echo "usando nova lib! <br>";
    }

    public function gerarRelatorioTXT($name)
    {
        echo "Relatorio gerado: $name.txt";
        echo "usando nova lib";
    }
}