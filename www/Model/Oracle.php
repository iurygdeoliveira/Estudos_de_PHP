<?php

namespace model;

use interfaces\Strategy;

class Oracle implements Strategy
{
    public function conectar()
    {
        echo "<p class='trigger accept'> Conectado ao Oracle</p>";
    }
    public function salvar()
    {
        echo "<p class='trigger accept'> Dados salvos no Oracle</p>";
    }
    public function ler()
    {
        echo "<p class='trigger accept'> Dados retornados do Oracle</p>";
    }
}