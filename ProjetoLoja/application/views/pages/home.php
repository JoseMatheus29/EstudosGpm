<?php   
    
    if (isset($_SESSION['usuario_logado'])){
        $usuario_logado = $_SESSION['usuario_logado'];
    }else{
        $usuario_logado['tipo'] = "cliente";
    }

?>
<main>

    <div class="container-fluid">
         <img src="<?= base_url()?>assets/img/pessoas.png" class='d-block w-100' alt='Imagem Pessoas com roupas'>
    </div>
        <div class="container">
            <div class="row">
                <?php foreach($produtos as $produto): ?>
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="<?= base_url()?>assets/img/<?php echo $produto['foto']?>" alt="Imagem roupa">
                        <div class="card-body">
                        <h5 class="card-title">Quantidade: <?php echo $produto['quantidade']?></h5>

                            <h5 class="card-title"><?php echo $produto['nome']?></h5>
                            <p class="card-text">R$ <?php echo $produto['valor']?></p>
                            <p class="card-text"><?php echo $produto['descricao']?></p>
                            <?php if($usuario_logado['tipo'] == 'adm'): ?>
                                <a class="btn btn" id="botaoCard" href="javascript:goDelete(<?= $produto['id']?>)"><i class="bi bi-trash3"></i></a>
                                <a  class="btn btn "  id="botaoCard" data-toggle="modal" data-target="#modalAtt<?= $produto['id']?>" ><i class="bi bi-pencil"></i></a>
                                <br><br>

                            <?php elseif ($usuario_logado['tipo'] == 'estoquista'): ?>
                                <a  class="btn btn "  id="botaoCard" data-toggle="modal" data-target="#modalAtt<?= $produto['id']?>" ><i class="bi bi-pencil"></i></a>
                                    <br><br>

                            <?php endif?>
                            
                            <div class="container">
                                <div class="row">
                                    <div class="row-md-3 ">
                                        <?php if(isset($_SESSION['usuario_logado'])):?>
                                            <a   href="<?= base_url()?>carrinhoController/adicionarCarrinho/<?= $produto['id']?>/<?= $usuario_logado['user_id']?>" class="btn btn btn-sm"  id="botaoCard" id="botao">Adicionar ao carrinho</a>
                                        <?php else:?>
                                            <a   href="<?= base_url()?>usuarioController/login" class="btn btn btn-sm"  id="botaoCard" id="botao">Adicionar ao carrinho</a>
                                        <?php endif?>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>    

                </div>
                    
                <?php endforeach ?>
            </div>
        </div>
        
</main>            

<script>
    function goDelete(id){
        var myUrl = 'ProdutoController/deletar/'+id
        if(confirm('Deseja realmente apagar esse registro?')){
            window.location.href =myUrl
        }else{
            alert("Registro não alterado")
            return false
        }
    }
</script>


<!-- 
<script>
    $('#modalAtt').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) 
    var modal = $(this)
    modal.find('.modal-body input#nome').val('teste')
    })
</script> -->