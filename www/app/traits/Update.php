<?php

declare(strict_types=1);

namespace app\traits;

use RedBeanPHP\R;
use RedBeanPHP\RedException;

trait Update
{
    public function update(R $bean, array $data)
    {

        try {

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