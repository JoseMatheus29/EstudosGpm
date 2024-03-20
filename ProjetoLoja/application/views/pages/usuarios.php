<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Games</h1>
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
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Tipo</th>
                    <th>Favoritos</th>
                    <th>Logado</th>

				</tr>
			</thead>
			<tbody>
                <?php foreach($usuarios as $usuario):?>
                    <tr>
                        <td><?= $usuario["user_id"] ?></td>
                        <td><?= $usuario["nome"] ?></td>
                        <td><?= $usuario["email"] ?></td>
                        <td><?= $usuario["telefone"] ?></td>
                        <td><?= $usuario["tipo"] ?></td>
                        <td><?= $usuario["favoritos"] ?></td>
                        <td><?= $usuario["logado"] ?></td>

                        <td>
                            <a href="<?= base_url()?>usuarioController/editarUsuario/<?=$usuario['user_id']?>" class='btn btn-sm btn-warning '>
                            <i class="bi bi-pencil"></a>
                            <a href="javascript:goDelete(<?= $usuario['user_id']?>)" class='btn btn-sm btn-danger '>
                            <i class="bi bi-trash3"></i>
                            </a>
                        </td>
                    </tr>
        <?php endforeach?>
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