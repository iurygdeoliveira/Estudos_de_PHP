<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 1 - Criptografia</title>
</head>
<?php
    $Texto = $_POST['texto'];
    if(!empty($Texto)){
        require_once './PrimeiraPassada.php';
        require_once './SegundaPassada.php';
        require_once './TerceiraPassada.php';
        $Passada1 = new PrimeiraPassada();
        $Passada2 = new SegundaPassada();
        $Passada3 = new TerceiraPassada();

        $result1 = $Passada1->Aplicacao($Texto);
        $result2 = $Passada2->AplicarInversao($result1);
        $resultFinal = $Passada3->AplicacaoFinal($result2);
    }
?>

<body>
    <h1>Desafio 1 - Criptografia</h1>
    <form action="index.php" method="POST">
        <label>Entrada: <input type="text" name="texto" id="texto"> <button type="submit">Enviar</button></label>
        <p><?php if(!empty($Texto)){ echo 'Entrada: '.$Texto.'<br>Saida: '.$resultFinal; }?></p>
    </form>
</body>

</html>