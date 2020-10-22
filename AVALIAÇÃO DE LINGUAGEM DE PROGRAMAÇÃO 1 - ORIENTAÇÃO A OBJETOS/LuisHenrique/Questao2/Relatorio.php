<?php
require_once 'Arma.php';
require_once 'Criminoso.php';
require_once 'Vitima.php';
class Relatorio{

    //Atributos
    private $visto;
    

    // Construtor
    function __construct()
    {
        $this->visto = false;
    }


    
    
    // Metodos

    public function autorizarVisto(){
        $this->visto = true;
    }

    public function negarVisto(){
        $this->visto = false;
    }

    public function criarRegistro($c,$l){
        if($this->visto === true){
            echo "<p>-------------------Relatório----------------------</p>";
            echo "O crime de ".$c->getCrime()." cometido por ".$c->getNomeCriminoso()." contra " .$l->getNomeVitima()." residente no endereço " 
         .$l->getEnderecoVitima().    " foi realizado no porte do armamento " . $c->getArmaUtilizada().". Relatório Autorizado pelo Chefe da Delegacia ";    
        }
        else{
            echo "Relatório não autorizado pelo Chefe da Delegacia.";
        }
    }


}