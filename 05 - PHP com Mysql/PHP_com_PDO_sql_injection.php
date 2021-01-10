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

PHPClassSession('SQL INJECTION', __LINE__);

$injection = "OR 1=1";

//$SELECT = "SELECT * FROM users WHERE id = 50 {$injection}";
$SELECT = "SELECT * FROM users LIMIT 5";

$query = $conexao->prepare($SELECT);

var_dump($query, $query->rowCount(), $query->columnCount(), $query->fetchAll());

$query->execute();

var_dump($query, $query->rowCount(), $query->columnCount(), $query->fetchAll());

PHPClassSession('BIND VALUE', __LINE__);

$SELECT = "SELECT * FROM users WHERE id = :id";
$query2 = $conexao->prepare($SELECT);
$query2->bindValue(":id", 5, PDO::PARAM_INT);
$query2->execute();

var_dump($query2->fetch());

$INSERT = "INSERT INTO users (first_name, last_name, email, document)
 VALUES (?,?,?,?)";

// $query3 = $conexao->prepare($INSERT);
// $query3->bindValue(1, "LIVIA", PDO::PARAM_STR);
// $query3->bindValue(2, "GOMES", PDO::PARAM_STR);
// $query3->bindValue(3, "livia@gmail.com", PDO::PARAM_STR);
// $query3->bindValue(4, "989989745", PDO::PARAM_STR);
// $query3->execute();

// var_dump($query3->rowCount(), $conexao->lastInsertId());

PHPClassSession('BIND PARAM', __LINE__);

$INSERT = "INSERT INTO users (first_name, last_name, email, document)
 VALUES (:first_name,:last_name,:email,:document)";

$first_name = "Helena";
$last_name = "Gomes";
$email = "helena@gmail.com";
$document = "235689";

$query4 = $conexao->prepare($INSERT);
$query4->bindParam(":first_name", $first_name, PDO::PARAM_STR);
$query4->bindParam(":last_name", $last_name, PDO::PARAM_STR);
$query4->bindParam(":email", $email, PDO::PARAM_STR);
$query4->bindParam(":document", $document, PDO::PARAM_STR);
$query4->execute();

var_dump($query4->rowCount(), $conexao->lastInsertId());

PHPClassSession('STMT EXECUTE ARRAY', __LINE__);

$insert = "
INSERT INTO users (first_name, last_name, email, document)
VALUES (:first_name, :last_name, :email, :document)";
$stmt = $conexao->prepare($insert);

$user = [
    "first_name" => "Talita",
    "last_name" => "Barbosa",
    "email" => "talita@gmail.com",
    "document" => "234234",
];

// $stmt->execute($user);

var_dump($stmt->rowCount(), $conexao->lastInsertId());

PHPClassSession('BIND COLUMN', __LINE__);

$select = "SELECT * FROM users LIMIT 3";
$stmt = $conexao->prepare($select);
$stmt->execute();

$stmt->bindColumn("first_name", $name);
$stmt->bindColumn("email", $email);

while ($user = $stmt->fetch()) {
    var_dump($user);
    echo "<p class='trigger accept'>O e-mail de {$name} é {$email}</p>";
}

ob_end_flush();