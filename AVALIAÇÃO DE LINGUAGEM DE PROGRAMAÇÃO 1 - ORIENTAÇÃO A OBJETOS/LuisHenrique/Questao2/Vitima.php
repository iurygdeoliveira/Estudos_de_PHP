<?php

class Vitima{
    //Atributos
    
    private $idVitima;
    private $nomeVitima;
    private $enderecoVitima;
    private $criminosoVitima;
    private $crimeSofrido;

    //Construtor

    function __construct($id,$n,$e)
    {
        $this->idVitima = $id;
        $this->nomeVitima = $n;
        $this->enderecoVitima = $e;
    }

    // Getters e Setters


    public function getIdVitima()
    {
        return $this->idVitima;
    }


    public function setIdVitima($idVitima)
    {
        $this->idVitima = $idVitima;

        return $this;
    }

    
    public function getNomeVitima()
    {
        return $this->nomeVitima;
    }

    
    public function setNomeVitima($nomeVitima)
    {
        $this->nomeVitima = $nomeVitima;

        return $this;
    }

    public function getEnderecoVitima()
    {
        return $this->enderecoVitima;
    }
 
    public function setEnderecoVitima($enderecoVitima)
    {
        $this->enderecoVitima = $enderecoVitima;

        return $this;
    }


    //Metodos
    
    
    public function relacionarCriminoso($criminoso){
        if($criminoso->getIdCriminoso() === $this->getIdVitima()){
               $this->crimeSofrido = $criminoso->getCrime();
               $this->criminosoVitima = $criminoso->getNomeCriminoso(); 
        }
        else{
            echo "Registro Inválido .";
        }

    }
}