<?php

declare(strict_types=1);
ob_start();

require_once __DIR__ . '/vendor/autoload.php';

use model\Conectar;

PHPClassName('PHP COM BANCO DE DADOS');


PHPClassSession('CONNECT', __LINE__);

$conexao = Conectar::getInstance();
var_dump($conexao);

PHPClassSession('INSERT', __LINE__);

$insert = "INSERT INTO users (first_name, last_name, email, document) VALUES ('Livia','Gomes','livia.oliveira@ifto.edu.br','987654321')";

// try {
//     $conexao->exec($insert);
//     echo "<p class='trigger accept'> O ID {$conexao->lastInsertId()} foi cadastrado</p>";
// } catch (PDOException $error) {
//     echo "<p class='trigger error'> Error {$error->getMessage()} </p>";
// }

// try {
//     $conexao->query($insert);
//     echo "<p class='trigger accept'> O ID {$conexao->lastInsertId()} foi cadastrado</p>";
// } catch (PDOException $error) {
//     echo "<p class='trigger error'> Error {$error->getMessage()} </p>";
// }

PHPClassSession('SELECT', __LINE__);

$select = "SELECT * FROM users LIMIT 5";

try {
    $query = $conexao->query($select);
    var_dump($query, $query->rowCount(), $query->fetchAll());
} catch (PDOException $error) {
    echo "<p class='trigger error'> Error {$error->getMessage()} </p>";
}

PHPClassSession('UPDATE', __LINE__);

$update = "UPDATE users SET first_name = 'talita', last_name = 'barbosa' WHERE first_name = 'iury' ";

// try {
//     $query = $conexao->exec($update);
//     var_dump($query);
// } catch (PDOException $error) {
//     echo "<p class='trigger error'> Error {$error->getMessage()} </p>";
// }

PHPClassSession('DELETE', __LINE__);

$delete = "DELETE FROM users WHERE id > 90";

try {
    $query = $conexao->exec($delete);
    var_dump($query);
} catch (PDOException $error) {
    echo "<p class='trigger error'> Error {$error->getMessage()} </p>";
}

ob_end_flush();