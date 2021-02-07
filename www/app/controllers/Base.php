<?php

declare(strict_types=1);

namespace app\controllers;;

use app\traits\Template;

abstract class Base
{
    use Template;

    // Obtendo nome da classe
    protected function nameClass($class): string
    {
        $fullName = explode('\\', $class);
        return mb_strtolower(end($fullName));
    }

    protected function nameView($class, $dir, $page): string
    {
        return $this->nameClass($class) . '/' . $dir . '/' . $page;
    }
}