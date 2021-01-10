<?php
declare(strict_types=1);
ob_start();
// require __DIR__ . '/framework/config.php';
//require __DIR__ . '/Others/Student.php';
require_once __DIR__ . '/vendor/autoload.php';
PHPClassName('AVANÇANDO COM POO');
 
PHPClassSession('Utilizando namespace', __LINE__);

use classes\Event;
use classes\EventLive;
use classes\Student;
use others\Student as OtherStudent;

$aluno = new Student();
var_dump($aluno, get_class_methods($aluno));

$aluno2 = new OtherStudent();
var_dump($aluno2);

PHPClassSession('propriedades em POO', __LINE__);

// $aluno->email = "email@servidor.com.br";
//$aluno->setEmail("email@servidor.com.br");
var_dump($aluno->getEmail());

PHPClassSession('métodos em POO e utilização de tipagem de dados', __LINE__);

if(!$aluno->setEmail("hermenegildo@servidor.com.br")){
    echo "<p class='trigger error'> O email {$aluno->getEmail()} não é valido</p>";
} else {
    echo "<p class='trigger accept'> O email {$aluno->getEmail()} é valido</p>";
}
// var_dump($aluno->setEmail("emailservidor.com.br"));

PHPClassSession('Herança', __LINE__);

$event = new Event(
    "Linguagem de Programação I",
    new DateTime("2020-05-20 19:04"),
    2500,
    4);
    
    var_dump($event, get_class_methods($event));
    
    $event->register("Iury Gomes","email@servidor.com.br");
    $event->register("Livia","email@servidor.com.br");
    $event->register("Talita","email@servidor.com.br");
    $event->register("Helena","email@servidor.com.br");
    $event->register("Alzira","email@servidor.com.br");
    
    
    $eventLive = new EventLive(
        "Linguagem de Programação I",
        new DateTime("2020-05-20 19:04"),
        2500,
        4,
        "http://endereco.com.br");
    
        
PHPClassSession('Polimorfismo', __LINE__);
        
var_dump($eventLive, get_class_methods($eventLive));

ob_end_flush();