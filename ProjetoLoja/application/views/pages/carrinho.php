<?php
    if (isset($_SESSION['usuario_logado'])){
        $usuario_logado = $_SESSION['usuario_logado'];
    }
    $carrinho = $this->usuarios_model->retornaProdutosCarrinho($usuario_logado['user_id']);
    $produtosArray = json_decode($carrinho['carrinho'], true);
    foreach ($produtosArray as $produtos): //captando os dados que vinheram do banco
        foreach ($produtos as $produto) : //interando o array
            
?>



<br><br><br>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h2>Carrinho</h2>
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
                    <td><?php echo $produto['id_produto'];?></td>
                    <td><?php echo $produto['id_usuario'];?></td>
                
                    
                    <td>
                    </i>
                        <a href="javascript:goDelete(<?= $car['id']?>)" class='btn btn-sm btn-danger '>
                        <i class="bi bi-trash3"></i>
                        </a>
                    </td>
                </tr>
                <a   href="<?= base_url()?>carrinhoController/finalizar//<?= $produto['id']?>/<?= $car['id']?>" class="btn btn btn-sm"  id="botaoCard" id="botao">Finalizar pedido</a>
                <?php endforeach?>
                <?php endforeach?>
			</tbody>
		</table>
	</div>

</main>

<script>
    function goDelete(id){
        var myUrl = 'carrinhoController/deletarCarrinho/'+id
        if(confirm('Deseja realmente apagar esse registro?')){
            window.location.href =myUrl
        }else{
            alert("Registro não alterado")
            return false
        }
    }
</script>