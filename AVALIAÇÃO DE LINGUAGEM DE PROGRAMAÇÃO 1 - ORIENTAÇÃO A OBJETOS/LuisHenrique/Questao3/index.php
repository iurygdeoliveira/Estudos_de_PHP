<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 3</title>
</head>
<body>
    <pre>
    <?php
    require_once 'Algoritmo.php';

    $t1 = new Algoritmo("BODY","10","<><BODY garbage>body<\BODY>");
    $t2 = new Algoritmo("aBc","923","< dont replacethis > abcabc<aBcaBcde>");
    $t3 = new Algoritmo("table","1","< ta>bLe< TaBlewidth=100></table></ta>");
    $t4 = new Algoritmo("replace","323","nothing inside");
    $t5 = new Algoritmo("HI","667","92< HI=/ >< z==//HIb >< cHIhi >");
    $t6 = new Algoritmo("a","23","<a B c a>");
    $t7 = new Algoritmo("b","2","<b b abc ab c> Mangojata");

    $t1->passarCodigo();
    $t2->passarCodigo();
    $t3->passarCodigo();
    $t4->passarCodigo();
    $t5->passarCodigo();
    $t6->passarCodigo();
    $t7->passarCodigo();

    
    
    print_r($t1->getSaida());
    print_r($t2->getSaida());
    print_r($t3->getSaida());
    print_r($t4->getSaida());
    print_r($t5->getSaida());
    print_r($t6->getSaida());
    print_r($t7->getSaida());

    ?>
    </pre>
</body>
</html>