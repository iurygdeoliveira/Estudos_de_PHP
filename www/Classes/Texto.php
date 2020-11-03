<?php

declare(strict_types=1);

namespace classes;

class Texto
{

    private $textoInicial;

    /**
     * Class constructor.
     */
    public function __construct(string $arquivo)
    {
        $this->textoInicial = file_get_contents($arquivo);
    }

    public function getTexto()
    {
        return $this->textoInicial;
    }

    public function viewTextoInicial()
    {
        echo "<p class='trigger'> Texto Inicial </p>";
        var_dump($this->textoInicial);
    }
}
