<?php
// JHESSIK KAELLY BEZERRA LEAL
require_once "Vitimas.php";
require_once "Criminosos.php";
require_once "Armas.php";

class Crimes{

    private $descricao;
    private $local;
    private $data;
    private $vitimas;
    private $criminosos;
    private $armas;

    //metodo
    public function mostrarCrime($pesquisarNome){
        $dado=$pesquisarNome;
        if($dado== $this->vitimas->getNome()){
          echo "\nDados do crime\nDescrição: ".$this->getDescricao().
          "\nData: ".$this->getData().
           "\nLocal: ".$this->getLocal().
           "\nVitima: ".$this->vitimas->getNome().",CPF: ".$this->vitimas->getCpf().
           "\nCriminoso: ".$this->criminosos->getNome().",CPF: ".$this->criminosos->getCpf().
           "\nArma usada: ".$this->armas->getIdentificacao().",Tipo: ".$this->armas->getTipo()."\n";
        }elseif( $dado==$this->criminosos->getNome()){
            echo "\nDados do crime\nDescrição: ".$this->getDescricao().
            "\nData: ".$this->getData().
             "\nLocal: ".$this->getLocal().
             "\nVitima: ".$this->vitimas->getNome().",CPF: ".$this->vitimas->getCpf().
             "\nArma usada: ".$this->armas->getIdentificacao().", Tipo: ".$this->armas->getTipo()."\n";
          }
    }
    // Construto e getters e setters
    public function  __construct($local,$data,$descricao,$vitimas,$criminosos,$armas){
            $this->setDescricao($descricao);
            $this->setData($data);
            $this->setLocal($local);
            $this->setVitimas($vitimas);
            $this->setCriminosos($criminosos);
            $this->setArmas($armas);
    }
    public function getArmas() {
        return $this->armas;
    }

    public function setArmas($armas): void {
        $this->armas = $armas;
    }
    public function getVitimas() {
        return $this->vitimas;
    }

    public function setVitimas($vitimas): void {
        $this->vitimas = $vitimas;
    }
    public function getCriminosos() {
        return $this->criminosos;
    }

    public function setCriminosos($criminosos): void {
        $this->criminosos = $criminosos;
    }
    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao): void {
        $this->descricao = $descricao;
    }
    public function getLocal() {
        return $this->local;
    }

    public function setLocal($local): void {
        $this->local = $local;
    }
    public function getData() {
        return $this->data;
    }

    public function setData($data): void {
        $this->data = $data;
    }
}