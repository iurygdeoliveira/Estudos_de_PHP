<?php

class Passada1{
    var $arr;
    



    public function pass1($mensagem){

     $this->arr = str_split($mensagem);
     

    for($i=0 ; $i < count($this->arr); $i++){
       if(ctype_alpha($this->arr[$i])==true){
      
        $this->arr[$i] = chr(ord($this->arr[$i])+3);
       }     
    }     
     return $this->arr;

    }    
    public function getArr()
    {
        return $this->arr;
    }
}