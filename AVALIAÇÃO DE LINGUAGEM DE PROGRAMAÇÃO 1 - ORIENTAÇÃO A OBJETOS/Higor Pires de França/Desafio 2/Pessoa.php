<?php
abstract class Pessoa{
    protected $nome;
    protected $cpf;
    protected $endereco;
    protected $telefone;

    public function __construct($cpf, $nome, $endereco, $telefone)
    {
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->telefone = $telefone;
    }
    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;

    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function getNome()
    {
        return $this->nome;
    }


    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    function MostrarDados(){
        echo '<br>-----------------------'.get_class($this).'-----------------------<br>
        <h4>'.htmlspecialchars($this->nome).'</h4>
        <p>CPF: '.htmlspecialchars($this->cpf).'</p>
        <p>Endereço: '.htmlspecialchars($this->endereco).'</p>
        <p>Telefone: '.htmlspecialchars($this->telefone).'</p><br>
              --------------------------------------------------------<br>';
    }
}