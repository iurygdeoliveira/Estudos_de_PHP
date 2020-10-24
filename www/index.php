<?php
declare(strict_types=1);
ob_start();

require_once __DIR__ . '/vendor/autoload.php';
PHPClassName('MÉTODOS MÁGICOS');
 

use classes\Student;


PHPClassSession('__CONSTRUCT', __LINE__);

$aluno = new Student("Iury", "Gomes", "iury@servidor.com.br", "34");
var_dump($aluno, get_class_methods($aluno));

PHPClassSession('__DESTRUCT', __LINE__);

PHPClassSession('__CLONE', __LINE__);

$aluno2 = clone $aluno;
$aluno2->setFirstName("Livia");
$aluno2->setLastName("Gomes");
$aluno2->setAge("32");
$aluno2->setEmail("livia@servidor.com.br");
var_dump($aluno2);

PHPClassSession('__SET', __LINE__);

$aluno2->firstName = "Talita";
// $aluno2->lastName = "Barbosa";
$aluno2->fistName = "1.00";
$aluno2->peso = "35 kg";
var_dump($aluno2);

PHPClassSession('__GET', __LINE__);

echo "<p class='trigger accept'> O peso é $aluno2->peso ! </p>";

PHPClassSession('__ISSET', __LINE__);

var_dump(isset($var));
var_dump(empty($var));
isset($aluno2->var);
empty($aluno2->var);
empty($aluno2->firstName);

PHPClassSession('__CALL', __LINE__);

var_dump($aluno2->getLastName());

PHPClassSession('__TOSTRING', __LINE__);

echo $aluno2;

PHPClassSession('__UNSET', __LINE__);

unset($aluno2->var);
unset($aluno2->email);

var_dump($aluno2);

PHPClassSession('INTERFACE', __LINE__);
PHPClassSession('TRAITS', __LINE__);

ob_end_flush();