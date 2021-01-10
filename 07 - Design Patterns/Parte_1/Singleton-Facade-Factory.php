<?php

declare(strict_types=1);
ob_start();

require_once __DIR__ . '/vendor/autoload.php';

use classes\Escola;
use classes\Facade;
use classes\PizzaFactory;
use \RedBeanPHP\R;

PHPClassName('PADRÕES DE PROJETO (DESIGN PATTERNS)');


PHPClassSession('CONEXÃO COM BD', __LINE__);

R::setup(
    "mysql:host=" . getenv('MYSQL_HOST') .
        ";dbname=" . getenv('MYSQL_DATABASE'),
    getenv('MYSQL_USER'),
    getenv('MYSQL_PASSWORD'),
); //for both mysql or mariaDB

R::getDatabaseAdapter()->getDatabase()->stringifyFetches(FALSE);
R::getDatabaseAdapter()->getDatabase()->getPDO()->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);

PHPClassSession('PADRÕES DE PROJETO', __LINE__);

PHPClassSession('O QUE SÃO DESIGN PATTERNS', __LINE__);

echo "<p class='trigger accept'> Padrões de escrita de código que representam soluções comprovadas para problemas recorrentes em desenvolvimento de software
</p>";

PHPClassSession('TIPOS DE PADRÕES DE PROJETOS', __LINE__);

echo "<p class='trigger accept'> PADRÕES CRIACIONAIS</p>";
echo "<p> São padrões que focam no processo de instanciação (criação) de objetos que são: </p>";
var_dump("builder", "factory", "singleton", "prototype");

echo "<p class='trigger accept'> PADRÕES ESTRUTURAIS</p>";
echo "<p> São padrões que focam em resolver problemas sobre composição de classes e objetos, eles são: </p>";
var_dump("Adapter", "Bridge", "Composite", "Decorator", "Facade", "Flyweight", "Proxy");

echo "<p class='trigger accept'> PADRÕES COMPORTAMENTAIS</p>";
echo "<p> São padrões que focam em resolver problemas de comunicação entre objetos, eles são: </p>";
var_dump("Interpreter", "Template Method", "Chain of Responsibility", "Command", "Iterator", "Mediator", "Memento", "Observer", "State", "Strategy", "Visitor");

PHPClassSession('SINGLETON', __LINE__);
echo "<p> Objetivo: Garante que uma classe tenha apenas uma instância e provê um ponto de acesso global a ela. Use o singleton quando, você identificar que deve haver exatamente uma instância de uma classe, e ela deve ser acessível aos cliente a apartir de um ponto de acesso conhecido </p>";

$escola = Escola::getInstance();
var_dump($escola);
$escola2 = Escola::getInstance();
var_dump($escola2);

PHPClassSession('FACADE', __LINE__);
echo "<p> Objetivo: BUSCA ESCONDER A COMPLEXIDADE DE UM SUB-SISTEMA, ASSIM DEISANDO O CÓDIGO LIMPO, MAS FÁCIL DE REALIZAR MANUTENÇÕES, E AJUDA A EVITAR REPETIÇÃO DE CÓDIGO </p>";

Facade::finalizarCompra(10, "Rua qualquer", "2323323", "Correios", 0);

PHPClassSession('FACTORY', __LINE__);
echo "<p> Objetivo: ESTE PADRÃO DE PROJETO É UTILIZADO PARA
CENTRALIZAR O PROCESSO DE CRIAÇÃO DE OBJETOS EM UM ÚNICO LUGAR É OTIMO PARA TRABALHAR QUANDO TEMOS VÁRIAS
VARIAÇÕES DE OBJETOS </p>";

$fabrica = new PizzaFactory();
var_dump($fabrica);

var_dump($fabrica->criarComida(3));

ob_end_flush();