<?php

class Passada3{
    var $arr3;
    var $sstring;

    public function pass3($mensagem){

        $this->arr3 = $mensagem;

            for($i = (count($this->arr3) - 1)/2 ; $i < count($this->arr3) ; $i++ ){
            $this->arr3[$i] = chr(ord($this->arr3[$i])-1);
            }

            return $this->arr3;
        }

        public function transformaString(){

            $this->sstring = implode($this->arr3);

            return $this->sstring;

        }


    public function getArr3()
    {
        return $this->arr3;
    }

   
    public function getSstring()
    {
        return $this->sstring;
    }
    public function theEnd(){
        echo 'A senha criptografada é : '.$this->getSstring();
    }

}
