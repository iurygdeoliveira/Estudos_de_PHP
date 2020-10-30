<?php
// JHESSIK KAELLY BEZERRA LEAL
class Armas{

    private $tipo;
    private $modelo;
    private $calibre;
    private $identificacao;
    // metodos
    public function  mostrarDadosArma(){
        echo "\nDados da Arma:\nTipo: ".$this->getTipo().
        "\nModelo: ".$this->getModelo().
        "\nCalibre: ".$this->getCalibre().
        "\nIdentificação: ".$this->getIdentificacao()."\n";
    }
    // construtor e getters e setters
    public function  __construct($tipo, $modelo, $calibre,$identificacao)
    {
       $this->setTipo($tipo);
       $this->setModelo($modelo);
       $this->setCalibre($calibre);
       $this->setIdentificacao($identificacao);
    }
    public function setTipo($tipo): void {
        $this->tipo = $tipo;
    }
    public function getTipo() {
        return $this->tipo;
    }
    public function setModelo($modelo): void {
        $this->modelo= $modelo;
    }
    public function getModelo() {
        return $this->modelo;
    }
    public function setCalibre($calibre): void {
        $this->calibre = $calibre;
    }
    public function getCalibre() {
        return $this->calibre;
    }
    public function setIdentificacao($identificacao): void {
        $this->identificacao = $identificacao;
    }
    public function getIdentificacao() {
        return $this->identificacao;
    }


}