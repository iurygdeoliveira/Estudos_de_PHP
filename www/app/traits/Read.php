<?php

declare(strict_types=1);

namespace app\traits;

use RedBeanPHP\R;
use RedBeanPHP\RedException;

trait Read
{
    private function selectOne(string $table, string $params, string $value)
    {

        try {
            return R::findOne($table, $params, [$value]);
        } catch (RedException $e) {
            //FIXME escrever erro em log de sistema
            $this->error = $e->getMessage();
            return false;
        }
    }

    private function selectAll(string $table)
    {

        try {
            return R::findAndExport($table);
        } catch (RedException $e) {
            //FIXME escrever erro em log de sistema
            $this->error = $e->getMessage();
            return false;
        }
    }
}
