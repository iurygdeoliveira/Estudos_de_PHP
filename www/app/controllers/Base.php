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

    protected function nameView($class, $page): string
    {
        return $this->nameClass($class) . '/' . $page;
    }

    protected function flashMessage($message, $type): string
    {
        return "<div class=\"alert alert-{$type} alert-dismissible\">
                  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                  <h5><i class=\"icon fas fa-ban\"></i> " . str_title($type) . "!</h5>
                  $message
                </div>";
    }
}
