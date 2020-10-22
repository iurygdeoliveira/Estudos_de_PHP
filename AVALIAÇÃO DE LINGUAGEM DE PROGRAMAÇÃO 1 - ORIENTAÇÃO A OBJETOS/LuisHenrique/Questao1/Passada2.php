<?php

class Passada2{
    var $arr2;     
    var $auxArr;
        


    public function pass2($mensagem){
        $this->auxArr = $mensagem;

        $this->arr2 = array_reverse($this->auxArr);      

        return $this->arr2;
    }

    public function getArr2()
    {
        return $this->arr2;
    }
}