<?php

namespace model;

use interfaces\Strategy;

class MySQL implements Strategy
{
    public function conectar()
    {
        echo "<p class='trigger accept'> Conectado ao MySQL</p>";
    }
    public function salvar()
    {
        echo "<p class='trigger accept'> Dados salvos no MySQL</p>";
    }
    public function ler()
    {
        echo "<p class='trigger accept'> Dados retornados do MySQL</p>";
    }
}