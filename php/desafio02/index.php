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
        <h1>Trabalhando com numeros aleatorios</<h1>
            <p>Gerando um numero aleatorio entre 0 e 100</p>
        <?php

            $num = rand(0, 100);
            echo "O numero gerado foi <stronger>$num</stronger>";
        
        ?>
        <button onclick="javascript:document.location.reload()">Gerar</button>
    </main>
    
</body>
</html>