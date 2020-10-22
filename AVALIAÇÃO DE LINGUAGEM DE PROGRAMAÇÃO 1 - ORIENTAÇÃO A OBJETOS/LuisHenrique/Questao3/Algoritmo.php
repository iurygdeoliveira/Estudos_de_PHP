<?php

class Algoritmo{
    private $linha1, $linha2 ,$linha3 , $saida;

    function __construct($l1,$l2,$l3)
    {
        $this->linha1 = $l1;
        $this->linha2 = $l2;
        $this->linha3 = $l3;
        
    }


    public function passarCodigo(){
        
        if(ctype_alpha($this->linha1)==true && strlen($this->linha1)<=10){
            if(preg_match('/\d+/', $this->linha2)>0){
            $this->saida = str_replace($this->linha1,$this->linha2,$this->linha3);
            }
            
        }
        return $this->saida;
    }
    public function getSaida()
    {
        return $this->saida;
    }
}