<?php

require_once 'Arma.php';
class Criminoso
{
    //Atributos

    private $idCriminoso;
    private $nomeCriminoso;
    private $crime;
    private $armaUtilizada;

    // Construtor
    
    function __construct($id, $n, $c)
    {
        $this->idCriminoso = $id;
        $this->nomeCriminoso = $n;
        $this->crime = $c;
    }


    // Getters e Setters

    public function getIdCriminoso()
    {
        return $this->idCriminoso;
    }


    public function setIdCriminoso($idCriminoso)
    {
        $this->idCriminoso = $idCriminoso;

        return $this;
    }


    public function getNomeCriminoso()
    {
        return $this->nomeCriminoso;
    }


    public function setNomeCriminoso($nomeCriminoso)
    {
        $this->nomeCriminoso = $nomeCriminoso;

        return $this;
    }


    public function getCrime()
    {
        return $this->crime;
    }


    public function setCrime($crime)
    {
        $this->crime = $crime;

        return $this;
    }


    public function getArmaUtilizada()
    {
        return $this->armaUtilizada;
    }

    private function setArmaUtilizada($armaUtilizada)
    {
        $this->armaUtilizada = $armaUtilizada;
    }

    // Metodos
    
    public function registrarArma($arma)
    {
        if ($arma->getIdArma() === $this->getIdCriminoso()) {
            $this->armaUtilizada = $arma->getNomeArma();
        }
        else{
            echo "Registro Inválido .";
        }

    }
}
