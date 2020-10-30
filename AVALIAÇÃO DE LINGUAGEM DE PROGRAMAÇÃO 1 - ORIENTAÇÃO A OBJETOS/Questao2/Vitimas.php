<?php
// JHESSIK KAELLY BEZERRA LEAL
class Vitimas{
    private $cpf;
    private $nome;
    private $rg;
    private $endereco;
    //metodos
    public function  mostrarDadosVitima(){
        echo "\nDados da Vitima:\nNome: ".$this->getNome().
        "\nCPF: ".$this->getCpf().
        "\nRG: ".$this->getRg().
        "\nEndereço: ".$this->getEndereco()."\n";
    }
// contructor e setters e getters
    public function  __construct( $nome,  $cpf,  $rg, $endereco)
    {
      $this->setNome($nome);
      $this->setCpf($cpf);
      $this->setRg($rg);
      $this->setEndereco($endereco);

    }
    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }
    public function getCpf() {
        return $this->cpf;
    }

    public function setCpf($cpf): void {
        $this->cpf = $cpf;
    }
    public function getRg() {
        return $this->rg;
    }

    public function setRg($rg): void {
        $this->rg = $rg;
    }
    public function getEndereco() {
        return $this->endereco;
    }

    public function setEndereco($endereco): void {
        $this->endereco = $endereco;
    }
    

}