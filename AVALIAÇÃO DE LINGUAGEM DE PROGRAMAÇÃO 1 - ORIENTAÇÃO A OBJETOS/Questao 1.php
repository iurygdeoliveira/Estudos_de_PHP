<?php

    //o texto inserido sera criptografado na primeira passada sendo movido 3 casa na tablea ascii
    //na segunda passada, o texto sera invertido
    //e na terceira passada somente do meio da string para frente as letras serao movidas um caractere a frente na tabela ascii
    
class Criptografia{
private $texto_criptografado;
public function getCriptografar(){
    return $this->texto_criptografado;
}
public function setCriptografar($n){

    $ar = str_split($n);
    $q = count($ar);
    $f = $q;
    $t = "";
    $fn = "";
   //primeira passada 
    for($i = 0; $i < $q; $i++){
    $p=ord($ar[$i])-3;
    $t = $t.chr($p);
    }
    echo "<br>Primeira passada: $t <br>";
    
   //segunda passada
    $s = strrev($t);
    echo "<br>Segunda passada: $s <br>";
    echo "<br>";
    
    //terceira passada
    $m = $q/2;
    $dv = round($m);
    $d = str_split($s);
    
    for($i = 0; $i < $dv; $i++){
      $o=ord($d[$i]);
      $fn=$fn.chr($o);
    }
    
    $fnp="";
    for($i = $dv; $i < $q; $i++){
      $l=ord($d[$i])+1; 
      $fnp=$fnp.chr($l);
    }
    $criptografia= $fn.$fnp;
    echo "<br>Terceira passada: $criptografia <br>";
    echo "<br>";
    $this->texto_criptografado = $criptografia;
    }
    
    }
    
    //instanciando o objeto e imprimindo o resultado
    $crip = new criptografia;
    $crip->setCriptografar ("atividade");
    print_r($crip);



?>
