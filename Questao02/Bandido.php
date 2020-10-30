<?php
require_once "Crime.php";

$consultaAutorCrime = new Crime();
$guardarAutorCrime = $consultaAutorCrime->getNomeDoCriminoso();

class Bandido{
    

    private $nomeBandido;
    private $idadeBandido;
    private $enderecoBandido;
    private $cpfBandido;

    //Função para cadastrar os dados do Bandido em um vetor.
    public function cadastroBandido($nome, $idade, $endereco, $cpf){
        $this->nomeBandido = $nome;
        $this->idadeBandido = $idade;
        $this->enderecoBandido = $endereco;
        $this->cpfBandido = $cpf;
    }

    //Função do tipo Get para chamar os dados do bandido.
    public function getDadosBandido(){
        echo "Dados do Bandido:";
        if($this->nomeBandido == $this->guardarAutorCrime)
        $dadosBandido = array("Nome:".$this->nomeBandido,
                                "Idade:".$this->idadeBandido,
                                "Endereço:".$this->enderecoBandido,
                                "CPF:".$this->cpfBandido);
        return print_r($dadosBandido);
    }

    









}