<?php

declare(strict_types=1);
ob_start();

require_once __DIR__ . '/vendor/autoload.php';

use model\MySQL;
use model\Oracle;
use \RedBeanPHP\R;
use classes\Diretorio;
use classes\File;
use classes\Cliente;

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

PHPClassSession('STRATEGY', __LINE__);
echo "<p> Objetivo: Define uma família de algoritmos, que encapsula cada um deles e os torna intercambiáveis. O strategy permite que o algoritmo varie independentemente dos clientes que o utilizam </p>";

$db = new Oracle();
$db->conectar();
$db->salvar();
$db->ler();

PHPClassSession('COMPOSITE', __LINE__);
echo "<p> Objetivo: Compõe objetos em estrutura de árvore para representar hierarquias do tipo partes-todo. O composite permite que os clientes tratem objetos individuais e composições de objetos de maneira uniforme </p>";

$pasta = new Diretorio("Pasta de Cursos");
$php = new File("php.zip");
$javascript = new File("js.zip");
$python = new File("python.zip");

$pasta->add($php);
$pasta->add($javascript);
$pasta->add($python);

$outraPasta = new Diretorio("Outra Pasta");

$java = new File("java.rar");
$ruby = new File("ruby.rar");

$outraPasta->add($java);
$outraPasta->add($ruby);

$pasta->add($outraPasta);

$pasta->listar();

var_dump($pasta);

PHPClassSession('ADAPTER', __LINE__);
echo "<p> Objetivo: Converte a interface de uma classe em outra interface esperada pelos clientes. O adapter permite que certas classes trabalhem em conjunto, pois de outra forma seria impossível por causa de suas interfaces incompatíveis </p>";

$cliente = new Cliente();
$cliente->principal();

ob_end_flush();
