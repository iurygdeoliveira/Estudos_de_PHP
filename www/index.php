<?php

<<<<<<< HEAD

phpinfo();
=======
declare(strict_types=1);
ob_start();

require_once __DIR__ . '/vendor/autoload.php';

use model\Conectar;

PHPClassName('PHP COM BANCO DE DADOS');


PHPClassSession('CONNECT', __LINE__);

$conexao = Conectar::getInstance();
var_dump($conexao);

PHPClassSession('INSERT', __LINE__);

PHPClassSession('SELECT', __LINE__);

PHPClassSession('UPDATE', __LINE__);

PHPClassSession('DELETE', __LINE__);

ob_end_flush();
>>>>>>> prof_iury_original/master
