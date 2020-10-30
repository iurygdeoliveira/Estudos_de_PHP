<?php
class Arma{
    private $tipo;
    private $ident;

    
    public function __construct($tipo, $ident)
    {
        $this->tipo = $tipo;
        $this->ident = $ident;
    }
    public function getIdent()
    {
        return $this->ident;
    }

    public function setIdent($ident)
    {
        $this->ident = $ident;

    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

    }

    function MostrarDados(){
        echo '<br>-----------------------'.get_class($this).'-----------------------<br>
        <h4>'.htmlspecialchars($this->tipo).'</h4>
        <p>ID: '.htmlspecialchars($this->ident).'</p><br>
              --------------------------------------------------------<br>';
    }
}