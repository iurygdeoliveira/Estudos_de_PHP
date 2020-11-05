<?php

declare(strict_types=1);

use classes\Delegacia;
use classes\Form;
use classes\InputText;
use classes\Arma;
use classes\Criminoso;
use classes\Vitima;
use classes\Crime;

ob_start();

require_once __DIR__ . '/vendor/autoload.php';

PHPClassName('CORREÇÃO DA PROVA');

PHPClassSession('QUESTÃO 2', __LINE__);

$delegacia = new Delegacia();

PHPClassSession('REGISTRAR ARMA', __LINE__);

$form = new Form("post", getenv('HTTP_REFERER'), 'arma');
$form->add(new InputText("identificacao", "Identificação da Arma"));
$form->add(new InputText("tipo", "Tipo da Arma"));
$form->add(new InputText("tamanho", "Tamanho da Arma"));
$form->add(new InputText("peso", "Peso da Arma"));
$form->render();

if (!empty($_POST)) {
    if ($_POST['function'] === 'arma') {
        $arma = new Arma();
        $delegacia->registrarArmas($arma->criarArma($_POST));
        $_POST['function'] = false;
    }
}

PHPClassSession('REGISTRAR VITIMA', __LINE__);

$form = new Form("post", getenv('HTTP_REFERER'), 'vitima');
$form->add(new InputText("nome", "Nome da Vitima"));
$form->add(new InputText("peso", "Peso da Vitima"));
$form->add(new InputText("altura", "Altura da Vitima"));
$form->add(new InputText("documento", "Documento da Vitima"));
$form->render();

if (!empty($_POST)) {
    if ($_POST['function'] === 'vitima') {
        $vitima = new Vitima();
        $delegacia->registrarVitimas($vitima->criarVitima($_POST));
        $_POST['function'] = false;
    }
}

PHPClassSession('REGISTRAR CRIMINOSO', __LINE__);

$form = new Form("post", getenv('HTTP_REFERER'), 'criminoso');
$form->add(new InputText("nome", "Nome da Criminoso"));
$form->add(new InputText("peso", "Peso da Criminoso"));
$form->add(new InputText("altura", "Altura da Criminoso"));
$form->add(new InputText("documento", "Documento da Criminoso"));
$form->render();

if (!empty($_POST)) {
    if ($_POST['function'] === 'criminoso') {
        $criminoso = new Criminoso();
        $delegacia->registrarCriminosos($criminoso->criarCriminoso($_POST));
        $_POST['function'] = false;
    }
}

PHPClassSession('REGISTRAR CRIME', __LINE__);

$form = new Form("post", getenv('HTTP_REFERER'), 'crime');
$form->add(new InputText("hora", "Hora do Crime"));
$form->add(new InputText("data", "Data do Crime"));
$form->add(new InputText("local", "Local do Crime"));
$form->add(new InputText("idArma", "Identificação da Arma"));
$form->add(new InputText("idVitima", "Identificação da Vitima"));
$form->add(new InputText("idCriminoso", "Identificação do Criminoso"));
$form->render();

if (!empty($_POST)) {
    if ($_POST['function'] === 'crime') {
        $crime = new Crime();
        $delegacia->registrarCrimes($crime->criarCrime($_POST));
        $_POST['function'] = false;
    }
}

PHPClassSession('VER DELEGACIA', __LINE__);
$delegacia->viewDelegacia();


ob_end_flush();