<?php
    if (isset($_SESSION['usuario_logado'])){
        $usuario_logado = $_SESSION['usuario_logado'];
    }
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
                <?php 
                    foreach($carrinho as $car):
                        if($usuario_logado['user_id'] == $car['id_usuario']):
                            foreach($produtos as $produto):
                                if($produto['id'] == $car['id_produto']):
                ?>
                <tr>
                    <td><?php echo $produto['nome'];?></td>
                    <td><?php echo $produto['valor'];?></td>

                    
                    <td>
                    </i>
                        <a href="javascript:goDelete(<?= $car['id']?>)" class='btn btn-sm btn-danger '>
                        <i class="bi bi-trash3"></i>
                        </a>
                    </td>
                </tr>
                <?php endif?>
                <<?php endforeach?>
                <?php endif?>
                <<?php endforeach?>
			</tbody>
		</table>
	</div>
    <a   href="<?= base_url()?>carrinhoController/finalizar//<?= $produto['id']?>/<?= $car['id']?>" class="btn btn btn-sm"  id="botaoCard" id="botao">Finalizar pedido</a>
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