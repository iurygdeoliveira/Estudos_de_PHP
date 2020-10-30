<?php
// JHESSIK KAELLY BEZERRA LEAL
    require_once "Vitimas.php";
    require_once "Criminosos.php";
    require_once "Armas.php";
    require_once "Crimes.php";

    // criando objeto vitmas
    $v= array();
    $v[0]= new Vitimas("MARIA DA SILVA", "089.098.000-00","000000","RUA 0, N° 1230");
    $v[1]= new Vitimas("CASSIA ALVES", "989.098.090-00","089000","RUA 9, N° 1130");
    for($i=0;$i<count($v);$i++){
        print_r($v[$i]->mostrarDadosVitima());
    }
    echo "\n----------------------------------";
    // criando objeto criminoso
    $c= array();
    $c[0]= new Criminosos("JONE ALMEIDA SOUSA", "000.090.890-00","001110","RUA 1,N°34");
    $c[1]= new Criminosos("JULIO ANTONIO ALVES", "100.090.890-00","101110","RUA 9,N°334");
    for($i=0;$i<count($v);$i++){
        print_r($c[$i]->mostrarDadosCriminoso());
    }
    echo "\n-------------------------------";
    // criando objeto armas
    $a= array();
    $a[0]= new Armas("branca","34","0","lh130");
    $a[1]= new Armas("Fogo","38","4","x00");
    for($i=0;$i<count($v);$i++){
        print_r($a[$i]->mostrarDadosArma());
    }
    echo "\n-------------------------------";
    //criando o objeto crime
    $cr= array();
    $cr[0]= new Crimes("RIO DE JANEIRO, CENTRO","12/06/2017","FURTO DE BOLSA EM FRENTE A PRAÇA, ENQUANTO A VITIMA PASSEAVA PELO LOCAL O CRIMINOSO A ATACA POR TRAS E A AMEAÇA COM UMA FACA ATÉ ELA ENTREGAR OS PERTENCES.",$v[0],$c[0],$a[0]);
    $cr[1]= new Crimes("SAO PAULO, RUA 9","13/06/2017","DURANTE A NOITE MARIDO CHEGA EM CASA BEBADO E BATE NA ESPOSA QUE FICA SERIAMENTE FERIDA, DEPOIS ATIRA NA PERNA DELA.",$v[1],$c[1],$a[1]);

    for($i=0;$i<count($v);$i++){
        print_r($cr[$i]->mostrarCrime("JULIO ANTONIO ALVES"));
    }
