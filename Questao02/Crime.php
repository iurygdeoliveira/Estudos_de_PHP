<?php
class Crime{

    private $vitimaCrime;
    private $autorCrime;
    private $armaUtilizada;
    private $localCrime;
    private $detalheCrime;

    //Função para cadastrar os dados do crime em um vetor
    public function cadastroCrime($vitima, $autor, $arma, $local, $detalhes){
        $this->vitimaCrime = $vitima;
        $this->autorCrime = $autor;
        $this->armaUtilizada = $arma;
        $this->localCrime = $local;
        $this->detalheCrime = $detalhes;
    }
    
    //Função do tipo Get para chamar os dados do crime ocorrido.
    public function getCrime(){
        echo "Dados do Crime:";
        $dadosCrime = array("Vítima:".$this->vitimaCrime,
                            "Autor:".$this->autorCrime,
                            "Arma utilizada:".$this->armaUtilizada,
                            "Local:".$this->localCrime,
                            "Detalhes do ocorrido:".$this->detalheCrime);
        return print_r($dadosCrime);
    }
    public function getNomeDoCriminoso(){
        return $this->autorCrime;
    }







}