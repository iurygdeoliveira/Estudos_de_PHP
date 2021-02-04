<?php

declare(strict_types=1);

namespace app\traits;

use RedBeanPHP\R;
use RedBeanPHP\RedException;

trait Create
{
    public function insert(string $table, array $data, int $count = 1)
    {

        try {

            $bean = R::dispense($table, $count);

            foreach ($data as $key => $value) {
                $bean->$key = $value;
            }

            $id = R::store($bean);
            return $id;
        } catch (RedException $e) {
            $this->error = $e->getMessage();
            return false;
        }
    }
}