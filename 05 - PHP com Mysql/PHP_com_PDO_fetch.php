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

PHPClassSession('FETCH', __LINE__);

$query = "SELECT * FROM users LIMIT 3";

$read = $conexao->query($query);

if (!$read->rowCount()) {
    echo "<p class='trigger error'> Error  {$error->getMessage()}</p>";
} else {
    //var_dump($read->fetch()); 

    while ($user = $read->fetch()) {
        var_dump($user);
    }
}

PHPClassSession('FETCH ALL', __LINE__);

$query = "SELECT * FROM users LIMIT 3";

$read = $conexao->query($query);

if (!$read->rowCount()) {
    echo "<p class='trigger error'> Error  {$error->getMessage()}</p>";
} else {
    // var_dump($read->fetchAll()); // RETORNAR O 1º RESULTADO

    foreach ($read as $key => $value) {
        var_dump($value);
    }
}

PHPClassSession('FETCH SAVE', __LINE__);

$query = "SELECT * FROM users LIMIT 3";

$read = $conexao->query($query);

if (!$read->rowCount()) {
    echo "<p class='trigger error'> Error  {$error->getMessage()}</p>";
} else {
    $resultado = $read->fetchAll();
    var_dump($resultado, $read->fetchAll());
}

PHPClassSession('FETCH STYLES DEFAULT', __LINE__);

$query = "SELECT * FROM users LIMIT 3";
$read = $conexao->query($query);

foreach ($read->fetchAll() as $key => $value) {
    var_dump($value);
}

PHPClassSession('FETCH STYLES USANDO PDO::FETCH_NUM', __LINE__);

$query = "SELECT * FROM users LIMIT 3";
$read = $conexao->query($query);

foreach ($read->fetchAll(PDO::FETCH_NUM) as $key => $value) {
    var_dump($value);
}

PHPClassSession('FETCH STYLES USANDO PDO::FETCH_ASSOC', __LINE__);

$query = "SELECT * FROM users LIMIT 3";
$read = $conexao->query($query);

foreach ($read->fetchAll(PDO::FETCH_ASSOC) as $key => $value) {
    var_dump($value);
}

PHPClassSession('FETCH STYLES USANDO PDO::FETCH_CLASS', __LINE__);

$query = "SELECT * FROM users LIMIT 3";
$read = $conexao->query($query);

foreach ($read->fetchAll(PDO::FETCH_CLASS, User::class) as $key => $value) {
    var_dump($value);
}

ob_end_flush();