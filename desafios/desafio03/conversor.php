<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 03</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas</h1>
        <?php 
            // Cotação copiada do Google
            $cotação = 5.23;

            // Quantos R$ você tem?
            $real = $_GET["din"] ?? 0;

            //Equivalência em dólar
            $dolar = $real / $cotação;

            // Mostrar o Resultado
            // echo "Seus R\$ . number_format($real, 2, ",", ".") . "equivalem a U$\$" . number_format($dolar, 2, ",", ".");

            // Formatação de moedas com internacionalização!
            // Biblioteca intl (Internallization PHP)

            $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<p>Seus " . numfmt_format_currency($padrão, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrão, $dolar, "USD") . "</p>"; 
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>