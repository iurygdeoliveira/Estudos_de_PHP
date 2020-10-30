<?php

class Vitima{
private $nome_v;
private $cpf_v;
private $endereco_v;
private $crime_sofrido;

public function getNome_v(){
return $this->nome_v;
}
public function setNome_v($nv){
$this->nome_v = $nv;
}
public function getCpf_v(){
return $this->cpf_v;
}
public function setCpf_v($cv){
$this->cpf_v = $cv;
}
public function getEndereco_v(){
return $this->endereco_v;
}
public function setEndereco_v($ev){
$this->endereco_v = $ev;
}

}

class Criminoso{
private $nome_c;
private $cpf_c;
private $endereco_c;
private $arma_criminoso;


public function getNome_c(){
return $this->nome_c;
}
public function setNome_c($nc){
$this->nome_c = $nc;
}
public function getCpf_c(){
return $this->cpf_c;
}
public function setCpf_c($cc){
$this->cpf_c = $cc;
}
public function getEndereco_c(){
return $this->endereco_c;
}
public function setEndereco_c($ec){
$this->endereco_c = $ec;
}
public function getArma_criminoso(){
return $this->arma_criminoso;
}
public function setArma_criminoso($ar_cr){
$this->arma_criminoso = $ar_cr;
}

}


class Arma{
private $nome_a;
private $num_a;


public function getNome_a(){
return $this->nome_a;
}
public function setNome_a($na){
$this->nome_a = $na;
}
public function getNum_a(){
return $this->num_a;
}
public function setNum_a($nma){ 
 $this->num_a = $nma;
}
}

class Crime{
private $numero_cr;
private $desc_cr;
private $criminoso_cr;
private $vitima_cr;
private $arma_do_crime;


public function getNumero_cr(){
return $this->numero_cr;
}
public function setNumero_cr($ncr){
$this->numero_cr = $ncr;
}
public function getDesc_cr(){
return $this->desc_cr;
}
public function setDesc_cr($dcr){
$this->desc_cr = $dcr;
}
public function getCriminoso_cr(){
return $this->criminoso_cr;
}
public function setCriminoso_cr($ccr){
$this->criminoso_cr = $ccr;
}
public function getVitima_cr(){
return $this->vitima_cr;
}
public function setVitima_cr($vcr){
$this->vitima_cr = $vcr;
}
public function getArma_do_crime(){
return $this->arma_do_crime;
}
public function setArma_do_crime($acr){
$this->arma_do_crime = $acr;
}
}

//instanciando e os objetos do Primeiro Crime;

$v = new Vitima();
$v->setNome_v("joao vitor pereira");
$v->setCpf_v("06683214688");
$v->setEndereco_v("rua ce 16, q 51, lote 18");


$a = new Arma();
$a->setNome_a("Faca");
$a->setNum_a("016008");


$c = new Criminoso();
$c->setNome_c("Gabriel");
$c->setCpf_c("06683252693");
$c->setEndereco_c("rua ce 19, q 63, lote 25");
$c->setArma_criminoso($a);

//Exibindo as informaçoes do "mini" banco de dados;
//Para que o crime ocorra, informe a Vitima, o Criminoso e a Arma do crime;

// Cadastrando um crime;
echo "<br>";
echo "<br>DADOS DOS CRIMES CADASTRADOS:";
$cr = new Crime();
$cr->setNumero_cr(204489);
$cr->setDesc_cr("<br>O crime ocorreu no centro de aragaina e teria se iniciado devido uma discurssão");
$cr->setVitima_cr($v);
$cr->setCriminoso_cr($c);
$cr->setArma_do_crime($a);
echo "<br>";



// Instanciando objetos do segundo crime;
$v2 = new Vitima();
$v2->setNome_v("Lucas");
$v2->setCpf_v("06642739566");
$v2->setEndereco_v("rua ce 16, q 60, lote 18");


echo "<br>";
$a2 = new Arma();
$a2->setNome_a("Revolver");
$a2->setNum_a("016009");

echo "<br>";
$c2 = new Criminoso();
$c2->setNome_c("Bernardo");
$c2->setCpf_c("06683252551");
$c2->setEndereco_c("rua ce 28, q 63, lote 35");
$c2->setArma_criminoso($a2);

// cadastrando um segundo crime;
$cr2 = new Crime();
$cr2->setNumero_cr(204432);
$cr2->setDesc_cr("<br>O crime ocorreu no centro de Palmas e teria se iniciado devido uma Traição");
$cr2->setVitima_cr($v2);
$cr2->setCriminoso_cr($c2);
$cr2->setArma_do_crime($a2);


//imprimindo os dados dos crimes;
echo "Primeiro crime: <br>";
print_r($cr);
echo "<br>_____________<br>";
echo "Segundo crime: <br>";
print_r($cr2);


?>
