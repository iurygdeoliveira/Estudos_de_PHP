<?php
class PrimeiraPassada{
    
    function Aplicacao($texto)
    {
        $arraryTexto = str_split($texto);
        for($i = 0;$i<count($arraryTexto);$i++){
            if(ctype_alpha($arraryTexto[$i])){
                $numAscii = ord($arraryTexto[$i]);
                $arraryTexto[$i] = chr($numAscii + 3);
            }
            
        }
        return $arraryTexto;
    }
}
?>