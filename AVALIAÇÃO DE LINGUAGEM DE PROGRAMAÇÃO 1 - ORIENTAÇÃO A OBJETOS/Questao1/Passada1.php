<?php

 // JHESSIK KAELLY BEZERRA LEAL
 
 class Passada1
 { 

     public function criptografia($txt){
        $array= str_split($txt);// transformar uma string em array
        
        for($i=0;$i<strlen($txt);$i++){// laço de repetição que vai até o tamanho da string
            if(ctype_alpha ($array[$i])){// verfica se é uma letra A-Z ou a-z
                $num=ord($array[$i]);// trasnforma a letra em numero conforme a tabela ASCII
                $num= $num+3;//passa 3 posições  para a direita
                $array[$i]=chr($num);// converte em caractere novamente conforme a tabela ACSII
                
               
            }
        }
        $txt=implode($array);// converte a array em string
         echo  "$txt"."\n";// mostra a string
         return $txt; // retorna o valor
     }
 }
 
