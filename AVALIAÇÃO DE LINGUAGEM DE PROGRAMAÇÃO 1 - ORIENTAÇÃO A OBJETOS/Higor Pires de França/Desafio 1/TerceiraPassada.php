<?php
class TerceiraPassada{
    function AplicacaoFinal($arrayInvertida)
    {
        $resulFinal = $arrayInvertida;
        if(count($resulFinal)%2 == 0){
            for($i = (count($resulFinal) / 2); $i < count($resulFinal); $i++){
                $numAscii = ord($resulFinal[$i]);
                $resulFinal[$i] = chr($numAscii - 1);
            }
            
        }
        else{
            for($i = ((count($resulFinal) - 1) / 2); $i < count($resulFinal); $i++){
                $numAscii = ord($resulFinal[$i]);
                $resulFinal[$i] = chr($numAscii - 1);
            }
        }
        $resulFinal = implode("",$resulFinal);
        return $resulFinal;
    }
}
?>