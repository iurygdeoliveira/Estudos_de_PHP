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

    public function insert(string $table, array $data, int $count = 1)
    {

        try {

            $bean = R::dispense($table, $count);

            foreach ($data as $key => $value) {
                $bean->$key = $value;
            }

            $id = R::store($table);
            return $id;
        } catch (RedException $e) {
            $this->error = $e->getMessage();
            return false;
        }
    }
}