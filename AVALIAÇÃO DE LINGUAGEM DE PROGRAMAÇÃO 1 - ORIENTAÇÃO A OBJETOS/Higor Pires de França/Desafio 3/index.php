<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 3</title>
    <style>
    table {
        min-width: 800px;
        min-height: 250px;
        border-collapse: collapse;
        border: 2px solid black;
    }

    th,
    td {
        padding: 2px;
        text-align: center;
        border: 1px solid black;
        min-height: 100px;
    }

    #lin {
        width: 40px;
    }

    #sai {
        width: 400px;
    }

    .high {
        border-top: 2px solid black;
    }

    .low {
        border-bottom: 2px solid black;
    }
    </style>
</head>

<body>
    <h1>Desafio 3</h1>
    <form action="index.php" method="post">
        <p>Entrada:</p><br>
        <textarea name="texto" id="texto" cols="100" rows="15"></textarea>
        <br>
        <button type="submit">Enviar</button>
    </form>
    <br>
    <br>
    <?php
    $texto = nl2br($_POST['texto']);
    
    if(!empty($texto)){
        require_once './Testes.php';
        require_once './SubstituirTags.php';
        new SubstituirTags($texto);
    }
?>
</body>

</html>