<?php

declare(strict_types=1);

namespace classes;

use classes\Criminoso;

class Delegacia
{
    public $vitimas;
    public $criminosos;
    public $crimes;
    public $armas;
    public $assinatura;


    private function gravarNoArquivo(string $arquivo, string $modo, $registro)
    {
        $fp = fopen($arquivo, $modo);
        $json = json_encode(array($registro), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        fwrite($fp, $json);
        fclose($fp);
    }

    private function salvarRegistro(string $arquivo, $registro)
    {
        $json = file_get_contents($arquivo);
        $dados = json_decode($json);

        if (empty($dados)) {
            $this->gravarNoArquivo($arquivo, "a", $registro);
        } else {
            array_push($dados, $registro);
            $this->gravarNoArquivo($arquivo, "w", $dados);
        }
    }

    private function viewItem(string $titulo, string $arquivo)
    {
        echo "<p class='trigger'> $titulo </p>";
        $json = file_get_contents($arquivo);
        $item = json_decode($json);
        var_dump($item);
    }

    public function registrarCriminosos(Criminoso $criminoso)
    {
        $this->salvarRegistro(__DIR__ . "/../Assets/delegacia/criminosos.json", $criminoso);
    }

    public function registrarVitimas(Vitima $vitima)
    {
        $this->salvarRegistro(__DIR__ . "/../Assets/delegacia/vitimas.json", $vitima);
    }

    public function registrarArmas(Arma $arma)
    {
        $this->salvarRegistro(__DIR__ . "/../Assets/delegacia/armas.json", $arma);
    }

    public function registrarCrimes(Crime $crime)
    {
        $this->salvarRegistro(__DIR__ . "/../Assets/delegacia/crimes.json", $crime);
    }

    public function viewDelegacia()
    {
        $this->viewItem("ARMAS REGISTRADAS", __DIR__ . "/../Assets/delegacia/armas.json");
        $this->viewItem("VITIMAS REGISTRADAS", __DIR__ . "/../Assets/delegacia/vitimas.json");
        $this->viewItem("CRIMINOSOS REGISTRADOS", __DIR__ . "/../Assets/delegacia/criminosos.json");
        $this->viewItem("CRIMES REGISTRADAS", __DIR__ . "/../Assets/delegacia/crimes.json");
    }
}
