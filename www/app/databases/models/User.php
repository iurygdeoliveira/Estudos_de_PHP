<?php

declare(strict_types=1);

namespace app\databases\models;

use app\databases\Database;
use RedBeanPHP\RedException;
use RedBeanPHP\R;

class User extends Database
{

    private $error;

    public function __construct()
    {
        parent::__construct();
    }

    public function getError()
    {
        return $this->error;
    }
}