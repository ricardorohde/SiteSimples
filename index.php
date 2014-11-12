<?php

require_once('inc/database.php');

$rotas = array("" => "home", "home" => "home", "empresa" => "empresa", "produtos" => "produtos", "servicos" => "servicos", "contato" => "contato", "pesquisa" => "pesquisa");

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
            if($pagina!='pesquisa') {
                echo(paginaDB($pagina));
                return true;
            }
        } else {
        // pagina invalida
        header('HTTP/1.0 404 Not Found');
        echo(paginaDB('404'));
        return false;
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
    <?php if($_SERVER['REQUEST_METHOD']==='POST'){

        // form contato
        if(isset($_POST['nome']) and $_POST['nome']!=null){

            echo '<div class="col-lg-12" id="servicos">';

            $erros = '';

            //nome
            if (isset($_POST['nome']) and $_POST['nome'] != null) {
                $nome = $_POST['nome'];
            } else {
                $nome = null;
                $erros .= 'Campo <strong>Nome</strong> inválido, volte e tente novamente.<br/>';
            }

            //email
            if (isset($_POST['email']) and $_POST['email'] != null) {
                $email = $_POST['email'];
            } else {
                $email = null;
                $erros .= 'Campo <strong>E-mail</strong> inválido, volte e tente novamente.<br/>';
            }

            //assunto
            if (isset($_POST['assunto']) and $_POST['assunto'] != null) {
                $assunto = $_POST['assunto'];
            } else {
                $assunto = null;
                $erros .= 'Campo <strong>Assunto</strong> inválido, volte e tente novamente.<br/>';
            }

            //mensagem
            if (isset($_POST['mensagem']) and $_POST['mensagem'] != null) {
                $mensagem = $_POST['mensagem'];
            } else {
                $mensagem = null;
                $erros .= 'Campo <strong>Mensagem</strong> inválido, volte e tente novamente.';
            }

            if ($nome != null AND $email != null AND $assunto != null AND $mensagem != null) {
                echo '<div class="col-lg-12">';
                echo '<div class="alert alert-success" role="alert">Dados enviados com sucesso, abaixo seguem os dados que você enviou.</div>';
                echo '<p>Nome: ' . $nome . '</p>';
                echo '<p>E-mail: ' . $email . '</p>';
                echo '<p>Assunto: ' . $assunto . '</p>';
                echo '<p>Mensagem: ' . nl2br($mensagem) . '</p>';
                echo '</div>';
            } else {
                echo '<div class="col-lg-12">';
                echo '<div class="alert alert-warning" role="alert">' . $erros . '</div>';
                echo '</div>';
            }
        } elseif(isset($_POST['p']) and $_POST['p']!= null) {
            $p = $_POST['p'];
            echo '<div class="col-lg-12" id="servicos">';
            $resultados = pesquisaDB($p);
            if (!empty($resultados)) {
                echo '<p>Abaixo apresentamos algumas páginas que contém o termo pesquisado.</p>';
                echo '<div class="list-group">';
                foreach ($resultados as $resultado) {
                    echo '<a href="' . $resultado['nome'] . '" class="list-group-item">' . ucfirst($resultado['nome']) . '</a>';
                }
                echo '</div>';
            } else{
                echo '<div class="alert alert-danger" role="alert">Nenhum resultado encontrado para o termo digitado ('.$p.')</div>';
            }

        }

        echo '</div>';

    } else {

    obtemPagina($rotas);

    } ?>

</div>
<!-- RODAPE -->
<?php include_once('inc/rodape.php'); ?>
<?php include_once('inc/scripts.php'); ?>
</body>
</html>