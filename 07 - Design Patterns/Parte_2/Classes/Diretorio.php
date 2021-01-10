<?php

declare(strict_types=1);

namespace classes;

use interfaces\FileInterface;

class Diretorio implements FileInterface
{
    public $name;
    public $file = [];

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function add(FileInterface $file)
    {
        array_push($this->file, $file);
    }

    public function listar()
    {
        echo "<p class='trigger accept'> Número de arquivos:" . count($this->file) . "</p>";

        foreach ($this->file as $key => $value) {
            $value->listar();
        }
    }
}