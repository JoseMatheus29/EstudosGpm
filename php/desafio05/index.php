<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio03</title>
    <link rel="stylesheet" href="../_css/style.css">
</head>
<body>
    <main>
        <h1>Analisador Real </h1>
        <form action="index.php" method="get">
            <label for="num"><p id="num">Qual valor vocÊ quer analisar?</p></label>
            <input type="number" name="entrada" id="entrada" step="0.001">
            <input type="submit">
        </form>
        <br>
        <?php
        $num = $_GET['entrada'];
        $int = (int) $num;
        $fra = $num - $int;
        echo "Parte inteira:" . number_format($int, 0, ",", ".") ."<br>". 
        "Parte fracionaria:" . number_format($fra, 3, ",", ".");


    ?>

    </main>
    
</body>
</html>