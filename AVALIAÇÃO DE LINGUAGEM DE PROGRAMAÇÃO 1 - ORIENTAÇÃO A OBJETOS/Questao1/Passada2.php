<?php
// JHESSIK KAELLY BEZERRA LEAL
class Passada2{


    public function criptografia2($txt){
        $txt= strrev($txt);// inverte a string
        echo  "$txt"."\n";// mostra a string
        return $txt;
    }

}