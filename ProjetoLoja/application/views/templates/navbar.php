
<header>
    <div class="container" id="nav-container ">
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
            <a href="#" class="navbar-brand">
                Loja Online
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" 
            aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigator">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" id="Carrinho" href="#">Carrinho</a>
                    <a class="nav-item nav-link" id="Produtos" href="#">Produto</a>
                    <a class="nav-item nav-link" id="Home" href="<?= base_url() ?>HomeController">Home</a>
                    <a class="nav-item nav-link" id="Entrar Cadastra" href="#">Entrar/Cadastrar</a>
                    <a class="nav-item nav-link" id="CadastraProdutos" href="<?= base_url() ?>ProdutoController">Cadastrar Produtos</a>


                </div>
            </div>
        </nav>
    </div>
</header>

