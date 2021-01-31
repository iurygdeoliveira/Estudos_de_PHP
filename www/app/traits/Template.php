<?php

declare(strict_types=1);

namespace app\traits;

use Slim\Views\Twig;
use Exception;

trait Template
{
    public function getTwig()
    {
        try {
            return Twig::create(CONF_DIR_VIEWS);
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }
    }

    public function setView(string $name)
    {
        return $name . CONF_EXT_VIEWS;
    }
}