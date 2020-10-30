<?php 
class Teste{
    private $linha1;
    private $linha2;
    private $linha3;
    private $resultado;

    public function __construct($linha1, $linha2, $linha3)
    {
        $this->linha1 = $linha1;
        $this->linha2 = $linha2;
        $this->linha3 = $linha3;
    }
    public function getLinha1(){
        return $this->linha1;
    }
    public function setLinha1($param){
        $this->linha1 = $param;
    }

    public function getLinha2(){
        return $this->linha2;
    }
    public function setLinha2($param){
        $this->linha2 = $param;
    }
    
    public function getLinha3(){
        return $this->linha3;
    }
    public function setLinha3($param){
        $this->linha3 = $param;
    }

    public function getResultado(){
        return $this->resultado;
    }
    public function setResultado($param){
        $this->resultado = $param;
    }
}