<?php
// JHESSIK KAELLY BEZERRA LEAL
class Passada3{
    
   
 
    public function criptografia3($txt){
        $array= str_split($txt);// transformar uma string em array
        $count=strlen($txt);// pega o tamanho da string
        for($i=$count/2;$i<$count;$i++){
            $num=ord($array[$i]);// trasnforma a letra em numero conforme a tabela ASCII
            $num= $num-1;//passa 3 posições  para a direita
            $array[$i]=chr($num);// converte em caractere novamente conforme a tabela ACSII
                
                
               
            
        }
        $txt=implode($array);//converte o array na string
         echo  "$txt";// mostra a string
         
    }

}