<?php

declare(strict_types=1);
ob_start();

require_once __DIR__ . '/vendor/autoload.php';

use model\Conectar;
use model\User;

PHPClassName('PHP COM BANCO DE DADOS');

PHPClassSession('CONEXÃO', __LINE__);

$conexao = Conectar::getInstance();
var_dump($conexao);

PHPClassSession('TRANSAÇÕES', __LINE__);

try {
    $conexao->beginTransaction();

    $insertUser = "INSERT INTO users (first_name, last_name, email, document) VALUES ('Iury','Gomes','iury.oliveira@ifto.edu.br','987654321')";

    $query = $conexao->query($insertUser);
    $userId = $conexao->lastInsertId();

    $insertAddress = "INSERT INTO address (street, number, complement, user_id) VALUES ('Rua de teste','9999','proximo a av. acolá', $userId)";

    $query = $conexao->query($insertAddress);

    $conexao->commit();
    echo "<p class='trigger accept'> Cadastro realizado com sucesso </p>";
} catch (PDOException $error) {
    $conexao->rollBack();
    echo "<p class='trigger error'> Erro {$error->getMessage()} </p>";
}

ob_end_flush();