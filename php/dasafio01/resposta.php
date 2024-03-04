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
        $ant = intval( $num ) - 1;
        $suc = intval( $num ) + 1;
        echo "O numero escolhido foi <strong>$num</strong></br>";
        echo "O antecessor do escolhido é <strong>$ant</br></strong>";
        echo "O sucessor do numero escolhido é <strong>$suc</br></strong>";
    ?>
        <a href="index.html">Voltar</a>
    </main>
    
</body>
</html>