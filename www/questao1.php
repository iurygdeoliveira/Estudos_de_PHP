<?php

declare(strict_types=1);

use classes\Encriptar;
use classes\Texto;

ob_start();

require_once __DIR__ . '/vendor/autoload.php';

PHPClassName('CORREÇÃO DA PROVA');

PHPClassSession('QUESTÃO 1', __LINE__);

$texto = new Texto(__DIR__ . '/Assets/texto.txt');
$texto->viewTextoInicial();

$encriptar = new Encriptar($texto->getTexto());

$encriptar->Passada1();
$encriptar->viewPassada1();

$encriptar->Passada2();
$encriptar->viewPassada2();

$encriptar->Passada3();
$encriptar->viewPassada3();

ob_end_flush();