<?php
declare(strict_types=1);
ob_start();

require_once __DIR__ . '/vendor/autoload.php';
PHPClassName('PHP COM BANCO DE DADOS');


PHPClassSession('Entendendo Controle de Erros', __LINE__);

try{
    
    // throw new Exception("Exception");
    throw new PDOException("pdoException");
    
}catch(PDOException $pdoException) {
    
    var_dump($pdoException->getMessage());
    
}catch(Exception $exception) {
    
    var_dump($exception->getMessage());
    
} finally{
    echo "<p class='trigger'> Execução acabou ! </p>";
}

PHPClassSession('Iniciando conexão com PDO', __LINE__);

try{
    
    
    $pdo = new PDO(
        "mysql:host=172.22.0.2;dbname=LP1",
        getenv('MYSQL_USER'),
        getenv('MYSQL_PASSWORD'),
        [
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
            ]
        );
        
        var_dump($pdo);
        
    }catch(PDOException $pdoException) {
        
        var_dump($pdoException->getMessage());
    }
    
PHPClassSession('Executando Busca no BD com PHP', __LINE__);

$stmt = $pdo->query("SELECT * FROM users LIMIT 4");
while ($user = $stmt->fetch(PDO::FETCH_OBJ)){
    var_dump($user);
}

var_dump(PDO::getAvailableDrivers());

ob_end_flush();