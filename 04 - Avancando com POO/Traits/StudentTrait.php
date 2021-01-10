<?php

namespace traits;

trait StudentTrait{

   public function __destruct()
    {
        echo "<p class='trigger error'> Método __destruct executado ! </p>";
    }

    public function __clone()
    {
        echo "<p class='trigger accept'> Método __clone executado ! </p>";
    }

    public function __set($name, $value)
    {
        echo "<p class='trigger accept'> Método __set executado ! </p>";
        $this->dados_nao_mapeados[$name] = $value;
    }

    public function __get($name)
    {
        echo "<p class='trigger accept'> Método __get executado ! </p>";
        if(!empty($this->dados_nao_mapeados[$name])){
            return $this->dados_nao_mapeados[$name];
        } else {
            echo "<p class='trigger error'> $name não encontrado ! </p>";
        }
    }

    public function __isset($name)
    {
        
        echo "<p class='trigger accept'> Método __isset executado ! </p>";
        echo "<p class='trigger accept'> A propriedade $name foi testada ! </p>";
    }
    
    public function __call($name, $arguments)
    {
        echo "<p class='trigger accept'> Método __call executado ! </p>";
        echo "<p class='trigger accept'> Método $name executado ! </p>";
        var_dump($arguments);
    }

    public function __toString()
    {
        echo "<p class='trigger accept'> Método __toString executado ! </p>";
        return "<p class='trigger'> Este é um objeto da Classe " . __CLASS__ . " ! </p>";
        
    }

    public function __unset($name)
    {
        echo "<p class='trigger accept'> Método __unset executado ! </p>";
        echo "<p class='trigger accept'> A Propriedade $name foi apagada ! </p>";
    } 
    
}