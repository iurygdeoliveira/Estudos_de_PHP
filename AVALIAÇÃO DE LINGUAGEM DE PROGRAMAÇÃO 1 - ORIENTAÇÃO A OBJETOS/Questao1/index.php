
<?php
// JHESSIK KAELLY BEZERRA LEAL
require_once 'Passada1.php';
require_once 'Passada2.php';
require_once 'Passada3.php';

$txt= "Texto #3";
$cr1= new Passada1;
$cr2= new Passada2;
$cr3= new Passada3;

$cr3->criptografia3($cr2->criptografia2($cr1->criptografia($txt)));

