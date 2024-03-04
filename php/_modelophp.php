<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
<?php
    include ("calculadora.php");
    $num1 = (int) $_POST["inum1"];
    $num2 = (int) $_POST["inum2"];
    $operacao = $_POST["operacao"];

    $calculadora = new Calculadora($num1, $num2);
    $resultado = $calculadora->getOperacao($operacao);
    echo "O resultado da operação foi: $resultado";

?>
</div>
</body>
</html>
 