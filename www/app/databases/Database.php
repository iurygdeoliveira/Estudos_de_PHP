<?php

declare(strict_types=1);

namespace app\databases;

use app\traits\InsertDB;
use \RedBeanPHP\R;
use PDO;
use PDOException;

class Database
{
    use InsertDB;

    public function __construct()
    {

        try {
            R::setup(
                "mysql:host=" . getenv('MYSQL_HOST') .
                    ";dbname=" . getenv('MYSQL_DATABASE'),
                getenv('MYSQL_USER'),
                getenv('MYSQL_PASSWORD'),
            ); //for both mysql or mariaDB

            R::getDatabaseAdapter()->getDatabase()->stringifyFetches(FALSE);
            R::getDatabaseAdapter()->getDatabase()->getPDO()->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
        } catch (PDOException $e) {
            echo $e->getmessage();
        }
    }
}