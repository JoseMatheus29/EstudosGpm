<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de jogos</title>
    <link rel="stylesheet" href="estilos/estilo.css">
</head>
<body>
    <?php
        require_once "includes/bd.php";
        require_once "includes/functions.php";
    ?>
    <div id="corpo">
        <h1>Escolha seu jogo</h1>
        <table class="listagem">
            <tr><td>Foto</td><td>Nome</td><td>Adm</td></tr>
            <?php
                $c = $_GET['cod'] ?? 0;
                $q = "select j.cod, j.nome , g.genero, j.capa, p.produtora from jogos j join generos g on j.genero = g.cod join produtoras p on j.produtora = p.cod";
                $busca = $banco -> query($q);
                if(!$busca){
                    echo "Falha na busca $banco->error";
                }else{
                    if($busca->num_rows == 0){
                        echo "<p>Nenhum registro encontrado!</p>";
                    }else{
                        while($reg = $busca->fetch_object()){
                            $t = thumb($reg->capa);
                            echo "<tr><td><img src='$t' alt='Capa do game' class='img'>";
                            
                            echo "<td><a href='detalhes.php?cod=$reg->cod'>$reg->nome</a>[$reg->genero]";
                            echo "<br>$reg->produtora";

                        }
                    }                    
                }
            
            ?>
            
        </table>
    </div>
    <?php
        require_once "rodape.php";
    ?>
</body>
</html>