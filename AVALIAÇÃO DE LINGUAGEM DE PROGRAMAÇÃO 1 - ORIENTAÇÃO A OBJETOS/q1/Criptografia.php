<?php

class Criptografia
{
    var $string;
    function Criptografia($string)
    {
        $this->string = $string;
        $this->passada1();
        echo "Passada1: ";
        echo $this->string;
        echo "\n";
        $this->passada2();
        echo "Passada2: ";
        echo $this->string;
        echo "\n";
        $this->passada3();
        echo "Passada3: ";
        echo $this->string;
        echo "\n";
    }
    function passada1()
    {
        // TRANSFORMAR STRING EM UM ARRAY
        $str_arr = str_split($this->string);
        // ARRAY TEMPORARIO
        $arr = [];
        // CRIAR UM NOVO ARRAY COM VALORES TROCADOS
        foreach ($str_arr as $letra) {
            // FILTRAR LETRAS MAIUSCULAS E MINUSCULAS
            if (preg_match("/[a-z|A-Z]/i", $letra)) {
                array_push($arr, chr(ord($letra) + 3));
            } else {
                array_push($arr, $letra);
            }
        }
        // TRANSFORMAR UM ARRAY EM UMA STRING
        $this->string = implode($arr);
    }
    function passada2()
    {
        // INVERTER STRING
        $this->string = strrev($this->string);
    }
    function passada3()
    {
        // TRANSFORMAR STRING EM UM ARRAY
        $str_arr = str_split($this->string);
        $arr1 = [];
        $arr2 = [];
        // SEPARANDO O ARRAY EM DOIS
        foreach ($str_arr as $key => $value) {
            if ($key < intval(strlen($this->string) / 2)) {
                array_push($arr1, $value);
            } else {
                array_push($arr2, $value);
            }
        }
        // TROCANDO OS VALORES DO ARRAY POR UMA CASA DO ASCII A MENOS
        foreach ($arr2 as $key => $value) {
            $arr2[$key] = chr(ord($value) - 1);
        }
        //  JUNTANDO OS DOIS ARRAYS
        $arr3 = array_merge($arr1, $arr2);
        // TRANSFORMAR UM ARRAY EM UMA STRING
        $this->string = implode($arr3);
    }
}
