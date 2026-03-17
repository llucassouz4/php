<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta Desafio PHP 01</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php
            $nu = $_GET["numero"];
            $nuant = $nu - 1;
            $nusuc = $nu + 1;
            echo "O número escolhido foi $nu<br>";
            echo "O seu antecessor é $nuant<br>";
            echo "O seu sucessor é $nusuc";
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>

</html>