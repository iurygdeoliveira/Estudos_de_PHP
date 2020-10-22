<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 1</title>
</head>
<body>
    <?php

    require_once 'Passada1.php';
    require_once 'Passada2.php';
    require_once 'Passada3.php';

        $p1 = new Passada1();
        $p2 = new Passada2();
        $p3 = new Passada3();

        $p1->pass1('Texto #3');
        $p2->pass2($p1->getArr());
        $p3->pass3($p2->getArr2());
        $p3->transformaString();




        print_r($p1->getArr());
        print_r($p2->getArr2());
        print_r($p3->getArr3());
        print_r($p3->theEnd());



        
        

       


    
    ?> 
</body>
</html>