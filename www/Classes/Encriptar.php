<?php

declare(strict_types=1);

namespace classes;

class Encriptar
{

    private $textoInicial;
    private $passagem1;
    private $passagem2;
    private $passagem3;

    /**
     * Class constructor.
     */
    public function __construct(string $textoInicial)
    {
        $this->textoInicial = $textoInicial;
        $this->passagem1 = [];
        $this->passagem2 = [];
        $this->passagem3 = [];
    }

    public function viewTextoInicial()
    {
        echo "<p class='trigger'> Texto Inicial </p>";
        var_dump($this->textoInicial);
    }

    public function viewPassada1()
    {
        echo "<p class='trigger'> Passada 1 </p>";
        var_dump($this->passagem1);
    }

    public function viewPassada2()
    {
        echo "<p class='trigger'> Passada 2 </p>";
        var_dump($this->passagem2);
    }

    public function viewPassada3()
    {
        echo "<p class='trigger'> Passada 3 </p>";
        var_dump($this->passagem3);
    }

    public function stringToArray(): array
    {
        $textoArray = str_split($this->textoInicial);
        return $textoArray;
    }

    private function converterCaracter(string $char, int $increment = 3): ?string
    {
        if (ctype_upper($char) || ctype_lower($char)) {
            return chr(ord($char) + 3);
        }
        return null;
    }

    public function Passada1(): array
    {
        $array = $this->stringToArray();
        echo "<p class='trigger'> Convertendo string para array </p>";
        var_dump($array);

        foreach ($array as $key => $value) {
            $char = $this->converterCaracter($value);
            if ($char !== null) {
                array_push($this->passagem1, $char);
            } else {
                array_push($this->passagem1, $value);
            }
        }

        return $this->passagem1;
    }

    public function Passada2(): array
    {
        $this->passagem2 = array_reverse($this->passagem1);
        return $this->passagem2;
    }

    public function Passada3(): string
    {
        $divisor = intval(floor(count($this->passagem2) / 2));
        $this->passagem3 = array_slice($this->passagem2, $divisor, null, true);

        foreach ($this->passagem3 as $key => $value) {

            $char = chr(ord($value) - 1);
            $this->passagem3[$key] = $char;
        }

        foreach ($this->passagem3 as $key => $value) {

            $this->passagem2[$key] = $this->passagem3[$key];
        }

        $this->passagem3 = implode($this->passagem2);

        return $this->passagem3;
    }
}