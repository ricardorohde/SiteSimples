<?php $paginas = getPaginasEditaveis(); ?>
<?php $produtos = getProdutosServicos('produtos'); ?>
<?php $servicos = getProdutosServicos('servicos'); ?>
<div class="navbar navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Menu</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php" id="logo"><img src="../img/logoMZ2.png" width="110" /></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Páginas<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <?php foreach($paginas as $rowPaginas){ ?>
                            <li><a href="editar.php?p=<?php echo $rowPaginas['nome']?>"><?php echo $rowPaginas['titulo']?></a></li>
                        <?php } ?>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Produtos<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <?php foreach($produtos as $rowProdutos){ ?>
                            <li><a href="editarProdutoServico.php?id=<?php echo $rowProdutos['idprodutoeservico']?>"><?php echo $rowProdutos['titulo']?></a></li>
                        <?php } ?>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Serviços<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <?php foreach($servicos as $rowServicos){ ?>
                            <li><a href="editarProdutoServico.php?id=<?php echo $rowServicos['idprodutoeservico']?>"><?php echo $rowServicos['titulo']?></a></li>
                        <?php } ?>
                    </ul>
                </li>

                <li><a href="logout.php">Sair</a></li>
            </ul>
        </div>
    </div>
</div>