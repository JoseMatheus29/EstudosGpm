<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titulo da pagina</title>
    <link rel="stylesheet" href="estilos/estilo.css">
</head>
<body>
    <?php
        require_once "includes/bd.php";
        require_once "includes/functions.php";
    ?>
    <div id="corpo">
        <?php
            $c = $_GET['cod'] ?? 0;
            $busca = $banco -> query('select * from jogos where cod ='.$c);
            if($busca->num_rows == 0){
                echo "<p>Nenhum registro encontrado!</p>";
            }else{
                while($reg = $busca->fetch_object()){
                    echo "<h1>Detalhes do jogo $reg->nome</h1>";
                    echo "<table>";
                    $t = thumb($reg->capa);
                    echo "<tr><td rowspan='3'><img src='$t' alt='Capa do game'>";
                    echo "<td><h2>$reg->nome</h2>";
                    echo "Nota: $reg->nota";
                    echo "<tr><td>$reg->descricao";
                    echo "<tr><td>Adm";
                    echo "</table>";
                }
            }
        ?>
    <a href="index.php"><img src="icones/icoback.png" alt="VOltar"></a>
    </div>
</body>
</html>