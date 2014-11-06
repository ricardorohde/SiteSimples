<div class="navbar navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Menu</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php" id="logo"><img src="img/logoMZ2.png" width="110" /></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li<?php if($pg==='home'){    echo ' class="active"'; }?>><a href="index.php">Home</a></li>
                <li<?php if($pg==='empresa'){ echo ' class="active"'; }?>><a href="empresa.php">Empresa</a></li>
                <li class="dropdown">
                    <a href="produtos.php" class="dropdown-toggle<?php if($pg==='produtos'){echo ' active"'; }?>" data-toggle="dropdown" aria-expanded="false">Produtos<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="produtos.php?p=grafico">Design Gráfico</a></li>
                        <li><a href="produtos.php?p=web">Design Web</a></li>
                        <li><a href="produtos.php?p=programacao">Programação</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="servicos.php" class="dropdown-toggle<?php if($pg==='servicos'){echo ' active"'; }?>" data-toggle="dropdown" aria-expanded="false">Serviços<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="servicos.php?s=logomarca">Logomarcas</a></li>
                        <li><a href="servicos.php?s=seo">SEO (Search Engine Optimization)</a></li>
                        <li><a href="servicos.php?s=otimizacao">Otimização de websites</a></li>
                    </ul>
                </li>
                <li<?php if($pg==='servicos'){echo ' class="active"'; }?>><a href="servicos.php">Serviços</a></li>
                <li<?php if($pg==='contato'){ echo ' class="active"'; }?>><a href="contato.php">Contato</a></li>
            </ul>
        </div>
    </div>
</div>