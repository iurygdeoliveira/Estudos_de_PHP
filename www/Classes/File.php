<?php

declare(strict_types=1);

namespace classes;

use interfaces\FileInterface;

class File implements FileInterface
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
    public function listar()
    {
        echo "<p class='trigger accept'> Nome do arquivo: $this->name </p>";
    }
}