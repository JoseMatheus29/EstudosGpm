<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caneta</title>
</head>
<body>
    <?php
        require_once("caneta.php");
        $c1 = new Caneta;
        $c1->modelo = "";
        $c1->cor= "Azult";
        $c1->ponta = 0.5;
        $c1->tampada=false;
    ?>
</body>
</html>