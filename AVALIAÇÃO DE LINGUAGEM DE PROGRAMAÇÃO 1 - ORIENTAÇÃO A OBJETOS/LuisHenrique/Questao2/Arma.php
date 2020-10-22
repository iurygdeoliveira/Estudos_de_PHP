<?php
require_once 'Criminoso.php';

class Arma{
    // Atributos
  
    private $idArma;
    private $nomeArma;
    
    // Construtor

    function __construct($id,$n)
    {
        $this->idArma = $id;
        $this->nomeArma =$n;
       
    }

    // Getters e Setters

    public function getIdArma()
    {
        return $this->idArma;
    }
    
    public function setIdArma($idArma)
    {
        $this->idArma = $idArma;

    }

    public function getNomeArma()
    {
        return $this->nomeArma;
    }
  
    public function setNomeArma($nomeArma)
    {
        $this->nomeArma = $nomeArma;

        
    }
}