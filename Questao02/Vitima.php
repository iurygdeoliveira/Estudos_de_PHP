<?php
class Vitima{

    private $nomeVitima;
    private $idadeVitima;
    private $enderecoVitima;
    private $cpfVitima;


    public function cadastroVitima($nome, $idade, $endereco, $cpf){
        $this->nomeVitima = $nome;
        $this->idadeVitima = $idade;
        $this->enderecoVitima = $endereco;
        $this->cpfVitima = $cpf;
    }
    
    public function getVitima(){
        echo "Dados da Vítima:";
        $cadastrovitima = array("Nome:".$this->nomeVitima,
                                "Idade:".$this->idadeVitima,
                                "Endereço:".$this->enderecoVitima,
                                "CPF:".$this->cpfVitima);

        print_r($cadastrovitima);
    }







}