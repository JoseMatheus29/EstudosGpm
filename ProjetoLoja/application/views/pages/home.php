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
                         <h2> <? echo base_url() . "assets/img/" . $produto['foto']?> </h2>
                            <h5 class="card-title"><?php echo $produto['nome']?></h5>
                            <p class="card-text"><?php echo $produto['descricao']?></p>
                            <a href="#" class="btn btn" id='botaoHome' >P</a>
                            <a href="#" class="btn btn" id='botaoHome'>M</a>
                            <a href="#" class="btn btn" id='botaoHome'>G</a>
                            <a href="#" class="btn btn" id='botaoHome'>GG</a>
                        </div>
                    </div>    

                </div>
                <?php endforeach ?>
            </div>
        </div>
        
</main>            

