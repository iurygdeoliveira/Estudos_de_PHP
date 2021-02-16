<?php

declare(strict_types=1);

namespace app\traits;

use RedBeanPHP\R;
use RedBeanPHP\RedException;
use PDO;

trait Connection
{
    public function connectDB()
    {

        try {
            R::setup(
                "mysql:host=" . getenv('MYSQL_HOST') .
                    ";dbname=" . getenv('MYSQL_DATABASE'),
                getenv('MYSQL_USER'),
                getenv('MYSQL_PASSWORD'),
            ); //for both mysql or mariaDB

            R::getDatabaseAdapter()->getDatabase()->stringifyFetches(FALSE);
            R::getDatabaseAdapter()->getDatabase()->getPDO()->setAttribute(PDO::ATTR_EMULATE_PREPARES, TRUE);
        } catch (RedException $e) {
            $this->error = $e->getMessage();
            return false;
        }
    }
}