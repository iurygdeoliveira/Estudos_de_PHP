<?php

declare(strict_types=1);

namespace interfaces;

use classes\Comida;

interface ComidaFactory
{
    public function criarComida($id): Comida;
}