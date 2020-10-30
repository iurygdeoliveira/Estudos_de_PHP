<?php
require_once "Criminoso.php";
require_once "Arma.php";
require_once "Vitima.php";
$c1 = new Criminoso("Carlim", "Assalto", 1);
$a1 = new Arma("Faca", $c1, 1);

print_r($c1);
print_r($a1);
