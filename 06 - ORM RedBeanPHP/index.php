<?php

declare(strict_types=1);
ob_start();

require_once __DIR__ . '/vendor/autoload.php';

use \RedBeanPHP\R;

PHPClassName('PHP COM ORM RedBeanPHP');


PHPClassSession('CONEXÃO', __LINE__);

R::setup(
    "mysql:host=" . getenv('MYSQL_HOST') .
        ";dbname=" . getenv('MYSQL_DATABASE'),
    getenv('MYSQL_USER'),
    getenv('MYSQL_PASSWORD'),
); //for both mysql or mariaDB

R::getDatabaseAdapter()->getDatabase()->stringifyFetches(FALSE);
R::getDatabaseAdapter()->getDatabase()->getPDO()->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);

PHPClassSession('CREATE', __LINE__);

// $book = R::dispense('book');

// $book->title = 'Estudando RedBeansPHP';
// $book->rating = 10;
// $book->price = '29.99';

// $id = R::store($book);

// var_dump($id);
// var_dump($book);
// var_dump(get_class_methods($book));

PHPClassSession('RETRIEVE', __LINE__);

$book = R::load('book', 8);
var_dump($book);

PHPClassSession('UPDATE', __LINE__);

$book->title = 'Learn to fly';
$book->rating = 'good';
$book->price = 105.15;
$book->data = R::isoDateTime();

var_dump(R::store($book));

PHPClassSession('DELETE', __LINE__);

var_dump(R::trash($book)); //for one bean

ob_end_flush();
