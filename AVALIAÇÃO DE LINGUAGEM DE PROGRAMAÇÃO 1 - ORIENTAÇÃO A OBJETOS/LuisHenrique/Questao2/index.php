<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 2</title>
</head>
<body>
    <?php
    require_once 'Criminoso.php';
    require_once 'Arma.php';
    require_once 'Vitima.php';
    require_once 'Relatorio.php';
    
    $c = array();
    $c[0]= new Criminoso(5406, "João da Silva", "Furto");
    $c[1]= new Criminoso(1234, "Elias Neptuno", "Latrocínio");
    $c[2]= new Criminoso(4567, "Robson Soares", "Tráfico de Drogas");
    $c[3]= new Criminoso(8900, "Chicharito Hernandez", "Homicidio");
    $c[4]= new Criminoso(0000, "Hugo Cabret", "Desacato a Autoridade");
    
    $a = array();
    $a[0]= new Arma (5406 , "Faca");
    $a[1]= new Arma (1234 , "Pistola Glock");
    $a[2]= new Arma (4567 , "Fuzil AR-15");
    $a[3]= new Arma (8900 , "Rifle Winchester");
    $a[4]= new Arma (0000 , "Porrete");
    
    $v = array(); 
    $v[0]= new Vitima(5406 , "Igor Santos" , "Rua da Mangabeiras , Bairro Boa Fé , N°16");    
    $v[1]= new Vitima(1234 , "Messias Junior" , "Rua da Tilapias , Bairro Moçambique , N°29");
    $v[2]= new Vitima(4567 , "Magnum Borges" , "Avenida Sem Fim , Loteamento Minerva , Quadra 5 , Lote 10");
    $v[3]= new Vitima(8900 , "Hernan Klinger" , "Rua da Nordestinas , Bairro Boa Fé , N°5");
    $v[4]= new Vitima(0000 , "Oficial Rogério" , "Rua da Caranguejeiras , Bairro Nova Luz , N°1");

    $r = array();
    $r[0]= new Relatorio();
    $r[1]= new Relatorio();
    $r[2]= new Relatorio();
    $r[3]= new Relatorio();
    $r[4]= new Relatorio();

    $c[0]->registrarArma($a[0]);
    $c[1]->registrarArma($a[1]);
    $c[2]->registrarArma($a[2]);
    $c[3]->registrarArma($a[3]);
    $c[4]->registrarArma($a[4]);
    
    
    $v[0]->relacionarCriminoso($c[0]);
    $v[1]->relacionarCriminoso($c[1]);
    $v[2]->relacionarCriminoso($c[2]);
    $v[3]->relacionarCriminoso($c[3]);
    $v[4]->relacionarCriminoso($c[4]);
    
    $r[0]->autorizarVisto();
    $r[1]->autorizarVisto();
    $r[2]->autorizarVisto();
    $r[3]->autorizarVisto();
    $r[4]->autorizarVisto();
    
    $r[0]->criarRegistro($c[0],$v[0]);
    $r[1]->criarRegistro($c[1],$v[1]);
    $r[2]->criarRegistro($c[2],$v[2]);
    $r[3]->criarRegistro($c[3],$v[3]);
    $r[4]->criarRegistro($c[4],$v[4]);


    ?>
</body>
</html>