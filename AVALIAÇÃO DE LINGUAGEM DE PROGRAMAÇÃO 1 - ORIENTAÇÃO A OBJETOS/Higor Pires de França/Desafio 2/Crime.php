<?php
class Crime{
    private $identificacao;
    private $Local;
    private $descricao;
    private $Data;
    private $Hora;
    private $Criminoso;
    private $Vitima;
    private $Arma;

    public function __construct($id, $local, $descricao, $Data, $Hora, $Criminoso, $Vitima, $Arma)
    {
        $this->identificacao = $id;
        $this->Local = $local;
        $this->descricao = $descricao;
        $this->Data = $Data;
        $this->Hora = $Hora;
        $this->Criminoso = $Criminoso;
        $this->Vitima = $Vitima;
        if(empty($Arma)){
            $this->Arma = new Arma('Nenhuma', '');
        }else{
            $this->Arma = $Arma;
        }
        
    }
    
    
    public function getIdentificacao()
    {
        return $this->identificacao;
    }

    public function getLocal()
    {
        return $this->Local;
    }

    public function setLocal($Local)
    {
        $this->Local = $Local;

        return $this;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function getData()
    {
        return $this->Data;
    }

    public function getHora()
    {
        return $this->Hora;
    }
    public function getNomeCriminoso()
    {
        return $this->Criminoso->getNome();
    }
    
    public function CompareVitima($Vitima)
    {
        if($this->Vitima == $Vitima)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function CompareCriminoso($Criminoso)
    {
        if($this->Criminoso == $Criminoso)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function getArma()
    {
        return $this->Arma;
    }
    function MostrarDadosCrime(){
        echo '<br>-----------------------'.get_class($this).'-----------------------<br>
        <h4>'.htmlspecialchars($this->descricao).'</h4>
        <p>ID: '.htmlspecialchars($this->identificacao).'</p>
        <p>Data: '.htmlspecialchars($this->Data).'</p>
        <p>Hora: '.htmlspecialchars($this->Hora).'</p>
        <p>Local: '.htmlspecialchars($this->Local).'</p>
        <p>Criminoso: '.htmlspecialchars($this->Criminoso->getNome()).'</p>
        <p>Vitima: '.htmlspecialchars($this->Vitima->getNome()).'</p>
        <p>Arma: '.htmlspecialchars($this->Arma->getTipo()).'</p><br>
              --------------------------------------------------------<br>';
    }
}