<?php

declare(strict_types=1);

namespace classes;

class InputText
{
    public $name;
    public $placeholder;

    public function __construct(string $name, string $placeholder)
    {
        $this->name = $name;
        $this->placeholder = $placeholder;
    }
}