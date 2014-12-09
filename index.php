<?php
require_once('inc/database.php');
require_once('inc/rotas.php');
$rota = rotaAtual();
$banner = getBannerPaginas($rota);
$pagina = getPagina($rota);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title><?php echo $pagina['titulo']; ?></title>
    <?php require('inc/head.php');?>
</head>
<body>
<div class="container">
    <!-- TOPO -->
    <?php require('inc/topo.php'); ?>

    <!-- CONTEUDO -->
    <?php
    if($rota=='contato'){
        include_once('paginas/contato.php');
    } elseif($rota=='pesquisa'){
        include_once('paginas/pesquisa.php');
    } elseif($rota=='home'){
        echo $banner;
        echo '<div class="col-lg-12" id="servicos">';
        $pagina = getPagina('home');
        echo '<h2>'.$pagina['titulo'].'</h2>';
        echo '<p>'.nl2br($pagina['conteudo']).'</p>';

        foreach(getProdutosServicos('produtos') as $rowProdutos){
            echo '<div class="col-lg-4">';
            echo '<img class="img-circle" src="img/'.$rowProdutos['imagem'].'" alt="'.$rowProdutos['titulo'].'" style="width: 250px; height: 250px;">';
            echo '<h2>'.$rowProdutos['titulo'].'</h2>';
            echo '<p>'.nl2br($rowProdutos['descricao']).'</p>';
            echo '<p><a class="btn btn-default" href="produtos" role="button">Visualizar detahes »</a></p>';
            echo '</div>';
        }
        echo '</div>';
    } elseif($rota=='empresa'){
        echo $banner;
        echo '<div class="col-lg-12" id="servicos">';
        $pagina = getPagina('empresa');
        echo '<h2>'.$pagina['titulo'].'</h2>';
        echo '<p>'.nl2br($pagina['conteudo']).'</p>';
        echo '</div>';
    } elseif($rota=='produtos'){
        echo $banner;
        echo '<div class="col-lg-12" id="servicos">';
        $pagina = getPagina('produtos');
        echo '<h2>'.$pagina['titulo'].'</h2>';
        echo '<p>'.nl2br($pagina['conteudo']).'</p>';
        foreach(getProdutosServicos('produtos') as $rowProdutos){
            echo '<h2>'.$rowProdutos['titulo'].'</h2>';
            echo '<p>'.nl2br($rowProdutos['descricao']).'</p>';
        }
        echo '</div>';
    } elseif($rota=='servicos'){
        echo $banner;
        echo '<div class="col-lg-12" id="servicos">';
        $pagina = getPagina('servicos');
        echo '<h2>'.$pagina['titulo'].'</h2>';
        echo '<p>'.nl2br($pagina['conteudo']).'</p>';
        foreach(getProdutosServicos('servicos') as $rowServicos){
            echo '<h2>'.$rowServicos['titulo'].'</h2>';
            echo '<p>'.nl2br($rowServicos['descricao']).'</p>';
        }
        echo '</div>';
    } else {
        $pagina = getPagina('404');
        echo '<div class="col-lg-12" id="servicos">';
        echo '<h2>'.$pagina['titulo'].'</h2>';
        echo '<p>'.$pagina['conteudo'].'</p>';
        echo '</div>';
    } ?>


</div>
<!-- RODAPE -->
<?php include_once('inc/rodape.php'); ?>
<?php include_once('inc/scripts.php'); ?>
</body>
</html>