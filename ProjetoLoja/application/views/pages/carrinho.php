<?php
$carrinho['nome'] = [];
$carrinho['valor'] = [];
$count = 0;
foreach($usuarios as $usuario){
    $jsonObj = $usuario->carrinho;
    if ($jsonObj !== null){
        foreach($jsonObj as $chave => $valor){
            var_dump($valor);
            if($chave == "nome"){
                echo $carrinho['nome'][$count];
                $carrinho['nome'][$count] = $valor;
                $count+=1;     
            } if($chave == "valor"){
                $carrinho['valor'][$count] = $valor;
                $count+=1;     
            }
        }
    }
} 
exit();

?>





<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Carrinho</h1>
		<div class="btn-group mr-2">
			<a href="<?=base_url() ?>games/new" class="btn btn-sm btn-outline-secondary"><i class="fas fa-plus-square"></i> Game</a>
		</div>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Valor</th>
				</tr>
			</thead>
			<tbody>
            
                <tr>
                    <td><?php echo $carrinho['nome'][0];?></td>
                    <td><?php echo $carrinho['valor'][1];?></td>

                    
                    <td>
                    <a  class="btn btn " id="botaoCard" data-toggle="modal" data-target="#modalAttUsuario<?= $usuario['user_id']?>">
                    <i class="bi bi-pencil">

                    </i>
                        <a href="javascript:goDelete(<?= $usuario['user_id']?>)" class='btn btn-sm btn-danger '>
                        <i class="bi bi-trash3"></i>
                        </a>
                    </td>
                </tr>
			</tbody>
		</table>
	</div>
</main>

<script>
    function goDelete(id){
        var myUrl = 'usuarioController/deletarUsuario/'+id
        if(confirm('Deseja realmente apagar esse registro?')){
            window.location.href =myUrl
        }else{
            alert("Registro não alterado")
            return false
        }
    }
</script>