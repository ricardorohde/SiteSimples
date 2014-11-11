<?php
$rotas = array("" => "home.php", "home" => "home.php", "empresa" => "empresa.php", "produtos" => "produtos.php", "servicos" => "servicos.php", "contato" => "contato.php" );

function rotaAtual() {
    $atual = str_replace(".php", "", substr($_SERVER["REQUEST_URI"],strrpos($_SERVER["REQUEST_URI"],"/")+1));
    return $atual;
}

//retorna se a rota atua está o array das rotas
function validaRota($atual,$rotas){
    return array_key_exists($atual, $rotas);
};

function obtemPagina($rotas){
    if (validaRota(rotaAtual(),$rotas)){
        $pagina = $rotas[rotaAtual()];
        if (file_exists('paginas/'.$pagina)){
            return require_once('paginas/' . $pagina);
        } else {
            // arquivo não existe
            header('HTTP/1.0 404 Not Found');
            return require_once('paginas/404.php');
        }
    } else {
        // pagina invalida
        header('HTTP/1.0 404 Not Found');
        return require_once('paginas/404.php');
    }

}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Produtos - PHP Foundation + Twitter Bootstrap</title>
    <?php require('inc/head.php');?>
</head>
<body>
<div class="container">
    <!-- TOPO -->
    <?php require('inc/topo.php'); ?>
    <!-- CONTEUDO -->
    <?php obtemPagina($rotas); ?>
</div>
<!-- RODAPE -->
<?php include_once('inc/rodape.php'); ?>
<?php include_once('inc/scripts.php'); ?>
</body>
</html>