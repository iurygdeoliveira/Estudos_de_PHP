<?php

declare(strict_types=1);

use classes\Texto;

ob_start();

require_once __DIR__ . '/vendor/autoload.php';

PHPClassName('CORREÇÃO DA PROVA');

PHPClassSession('QUESTÃO 3', __LINE__);

$texto = new Texto(__DIR__ . '/Assets/arquivo.txt');
$texto->view("TEXTO INICIAL", $texto->getTexto());

$texto->dividirTexto();
$texto->view("TEXTO DIVIDIDO", $texto->getTextoDividido());

$texto->extrairPattern();
$texto->view("PATTERN", $texto->getPattern());

$texto->extrairReplace();
$texto->view("REPLACE", $texto->getReplace());

$texto->extrairSaida();
$texto->view("SAIDA", $texto->getSaida());

$texto->aplicarReplace();
$texto->view("RESULTADO FINAL", $texto->getResultado());



ob_end_flush();
