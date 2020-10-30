<?php
// JHESSIK KAELLY BEZERRA LEAL
    require_once "Conversao.php";
    //variaveis
    $tag=array();
    $num=array();
    $texto=array();
    $textTag= array();

    //adicionando valores
    $tag[0]="Body";
    $num[0]=10;
    $texto[0]="<Body oi 489></Body>";
    $textTag[0]=new Conversao($tag[0],$num[0],$texto[0]);

    $tag[1]="aBc";
    $num[1]=923;
    $texto[1]="<dont repleacethis>abecabfc<abcdef>";
    $textTag[1]=new Conversao($tag[1],$num[1],$texto[1]);

    // imprimindo resultado
    for($i=0;$i<count($textTag);$i++){
    print_r($textTag[$i]->converterTags()."\n");
    }