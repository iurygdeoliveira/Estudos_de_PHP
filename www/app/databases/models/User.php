<?php

declare(strict_types=1);

namespace app\databases\models;

use app\databases\Connection;
use app\traits\InsertDB;
use RedBeanPHP\RedException;
use RedBeanPHP\R;

class User extends Connection
{

    private $error;
    use InsertDB;

    public function __construct()
    {
        $this->connectDB();
    }

    public function getError()
    {
        return $this->error;
    }
}
