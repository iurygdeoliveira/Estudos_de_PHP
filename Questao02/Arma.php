<?php

class Arma{

    private $tipoArma; //Ex: Revolver, pistola, sub-metralhadora, faca, punhal, etc.
    private $calibreArma;
    private $portadorArma; //Ladrão que estava com a arma.

    //Função para cadastrar dados da arma em um vetor
    public function cadastroArma($tipo, $calibre, $portador){
        $this->tipoArma = $tipo;
        $this->calibreArma = $calibre;
        $this->portadorArma = $portador;
    }

    //Função do tipo Get para puxar os dados da arma e quem a portava.
    public function getArma(){
        echo "Dados da Arma";
        $dadosArma = array("Tipo:".$this->tipoArma,
                            "Calibre:".$this->calibreArma,
                            "Portador:".$this->portadorArma);
        return print_r($dadosArma);
    }





}