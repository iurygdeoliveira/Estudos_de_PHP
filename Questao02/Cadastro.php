<?php

class Cadastro{
    var $nomevitima = array();
    var $arma = array();
    var $nomecriminoso = array();
    var $primarykey = 0;
    var $contadorlinha;
    var $contadorcoluna;
    var $crime = array();
   
    public function cadastroVitima($vitima){
        $this->nomevitima = $vitima;
    }
     public function cadastroArma($weapon){
         $this->arma = $weapon;
     }
     public function cadastroCriminoso($bandido){
         $this->nomecriminoso = $bandido;
     }
     public function crime($tipocrime){
         $this->crime = $tipocrime;
     }
     public function inserirBD(){
        $this->contadorlinha = 0;
        $this->contadorcoluna = 0;
        for($i = $this->contadorlinha; $this->contadorlinha < 2 ; $this->contadorlinha++){

            for($j = $this->contadorcoluna; $this->contadorcoluna < 1; $this->contadorcoluna++){
                $matrizbd = array("id"=>$this->primarykey, "Vítima"=>$this->nomevitima,
                "Arma"=>$this->arma, "Criminoso(a)"=>$this->nomecriminoso, "Crime"=>$this->crime);
                    
                    print_r($matrizbd);
                    $this->primarykey++;
            }
            
        }
        
        
    }
     




}