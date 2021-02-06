<?php

declare(strict_types=1);

namespace app\traits;

use RedBeanPHP\R;
use RedBeanPHP\RedException;

trait Read
{
    public function select(string $table, string $params, string $value)
    {

        try {
            return R::find($table, $params, [$value]);
        } catch (RedException $e) {
            $this->error = $e->getMessage();
            return false;
        }
    }
}