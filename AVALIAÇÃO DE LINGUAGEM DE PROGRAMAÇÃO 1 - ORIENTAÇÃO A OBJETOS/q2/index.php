<?php
require_once "Criminoso.php";
require_once "Arma.php";
require_once "Vitima.php";
require_once "Crime.php";
$banco_de_crimes = [];
// NOME IDADE CPF
$c1 = new Criminoso("Pedro Anthony Porto", 35, "849.552.866-58");
// NOME IDADE CPF
$v1 = new Vitima("Heloise Maria Elaine Moraes", 20, "578.755.600-39");
// NOME TIPO
$a1 = new Arma("Faca", "Branca");
// VITIMA CRIME ARMA DETALHES
$cr1 = new Crime($v1, $c1, $a1, "tentativa de assalto");
array_push($banco_de_crimes, $cr1);

$c2 = new Criminoso("Hugo Luís Miguel Rodrigues", 21, "498.011.291-90");
$v2 = new Vitima("Yuri Tiago Sales", 25, "645.653.715-02");
$a2 = new Arma("Glock g43x", "Fogo");
$cr2 = new Crime($v2, $c2, $a2, "roubo de moto", true);
array_push($banco_de_crimes, $cr2);

// Pesquisar crime pelo criminoso
foreach ($banco_de_crimes as $crime) {
    if ($crime->getCriminoso()->nome == "Hugo Luís Miguel Rodrigues") {
        $crime->printRelatorio();
        echo "\n";
        print_r($crime);
    }
}

// Pesquisar crime pela vitima
foreach ($banco_de_crimes as $crime) {
    if ($crime->getVitima()->nome == "Heloise Maria Elaine Moraes") {
        $crime->printRelatorio();
        echo "\n";
        print_r($crime);
    }
}
