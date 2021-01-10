<?php

declare(strict_types=1);

namespace classes;

class Escola
{
    public $nomeDaEscola = "IFTO";
    public $ano = "2022";
    private static $instancia = null;

    private function __construct()
    {
    }
    private function __clone()
    {
    }
    private function __wakeup()
    {
    }

    public function realizarMatricula()
    {
        echo "Realizando matricula ... <br>";
    }

    public static function getInstance()
    {

        if (self::$instancia == null) {
            self::$instancia = new Escola();
        }

        return self::$instancia;
    }
}