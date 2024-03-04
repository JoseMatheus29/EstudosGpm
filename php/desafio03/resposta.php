<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio01</title>
    <link rel="stylesheet" href="../_css/style.css">
</head>
<body>
    <main>
    <?php
        $num = $_GET['entrada'];
        $cotacao = 4.95;
        $res = $num/$cotacao;
        
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        echo "seus" . numfmt_format_currency($padrao, $num, "BRL") . "equivalem a" . numfmt_format_currency($padrao, $res, "USD");


    ?>
    <br>
        <a href="index.html">Voltar</a>
    </main>
    
</body>
</html>