<?php

Class Tag{
      
     private $line1;
     private $line2;
     private $line3;
     
   public function getLine1(){
       return $this->line1;
   }
   public function setLine1($ln1){
      $this->line1 = $ln1;
   }
   public function getLine2(){
       return $this->line2;
   }
   public function setLine2($ln2=""){
      $this->line2 = $ln2;
      
   }
    
   public function getLine3(){
       return $this->line3;
   }
     
   public function setLine3(String $ln3){
    $this->line3  = $ln3;
   }
   
   public function TransTag(){
   
   //conta se < vem antes de >
   $contaga = stripos($this->line3, '<');
   $contagf = stripos($this->line3, '>');
   
   // conta a quantidade de < e >;
   $counta = substr_count($this->line3 , '<', 0);
   $countf = substr_count($this->line3 , '>', 0);
   
   $tagfinal = "";
   $validar = "";
   //if para verificar se todas as linhas estao cheias;
   if(($this->line1!=null)&&(ctype_alpha($this->line1)!=0)&&($this->line2!=0)&&($this->line3!=null)){
   
   //if para verificar se a tag possui os caracteres < e >;
   if (stripos($this->line3, '>') != -1){
   
   //if pra verificar se < vem antes de >;
   if($contaga < $contagf){
   
   //conta se < tem a mesma quantidade que >;
   if($counta==$countf){
    $tagfinal=str_ireplace($this->line1, $this->line2 , $this->line3);
    echo $tagfinal;
    
   }//fim do 4° if
   else{
    echo "Tag Invalida! A quantidade de caracteres '<' deve ser igual a quantidade de '>' na setLine3!";
   
   }
   }//fim do 3° if
   else {
   echo "Tag Invalida! Preencha a setLine3 corretamente! com a mesma quantidade de < e >, e os colocando na ordem correta!";
   }
   }//fim do 2° if  
   else {
   echo "Tag Invalida! Preencha corretamente a line3";
   }
   
   }//fim do 1° if
   else {
   echo "Preencha todas as linhas Corretamente! A primeira linha deve conter apenas letras, a segunda apenas numeros e a terceira linha deve conter uma tag valida!";
   }
   }//fim da função TransTag
   }//fim da classe
   
   
 
      $t= new Tag();
      $t->setLine1 ("BODY");
      $t->setLine2 (4482);
      $t->setLine3 ("<body>ydccdr<body>jfrd");
      
      echo "<br>";
      $t->TransTag();
     


?>
