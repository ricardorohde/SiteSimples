<?php
session_start();

require_once('inc/seguranca.php');
require_once('../inc/config.php');
require_once('../inc/database.php');

if(estaLogado()==false){
    expulsaVisitante();
}

if(isset($_GET['id']) and $_GET['id']!= null){
    $id = $_GET['id'];
} else{
    $id = null;
}

if($id!=null) {
    $pagina = getUmProdutoServico($id);
} else {
    $pagina = null;
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Painel Administrativo Site Simples</title>
    <?php require('inc/head.php');?>
</head>
<body>
<div class="container">
    <!-- TOPO -->
    <?php require('inc/topoAdm.php'); ?>
    <div class="col-lg-12" id="servicos">
        <?php if($_SERVER['REQUEST_METHOD']!='POST'){ ?>
            <?php if($pagina!=null){?>
            <h4>Editando o item: <?php echo $pagina['titulo']; ?></h4>
                <br/>
                <form name="editar" method="post" enctype="multipart/form-data" action="editarProdutoServico.php" role="form">
                    <div class="form-group">
                        <label for="titulo">Título:</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo $pagina['titulo']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="descricao">Conteúdo da página</label>
                        <textarea name="descricao" id="descricao"><?php echo $pagina['descricao']; ?></textarea>
                    </div>

                    <input type="hidden" name="idprodutoeservico" value="<?php echo $pagina['idprodutoeservico']; ?>">

                    <button type="submit" class="btn btn-default">Salvar alterações</button>

                </form>
                <script>CKEDITOR.replace('descricao');</script>
            <?php } else { ?>
                <h4>Página inválida!</h4><br/>
                <p>Selecione uma página no menu acima</p>
            <?php } ?>
        <?php } else {
            //var_dump($_POST);

            if(isset($_POST['idprodutoeservico']) and $_POST['idprodutoeservico']!=null){
                $idprodutoeservico = $_POST['idprodutoeservico'];
            } else {
                $idprodutoeservico = null;
            }

            if(isset($_POST['titulo']) and $_POST['titulo']!=null){
                $titulo = $_POST['titulo'];
            } else{
                $titulo = null;
            }

            if(isset($_POST['descricao']) and $_POST['descricao']!=null){
                $descricao = $_POST['descricao'];
            } else {
                $descricao = null;
            }

            if($idprodutoeservico !=null and $titulo!=null and $descricao!= null){
                //insere os dados
                if(updateProdutoServico($idprodutoeservico,$titulo,$descricao)) {
                    echo 'OK!, dados alterados com sucesso.';
                } else{
                    echo 'Erro na inserção dos dados.';
                }

            } else{
                echo 'Dados não alterados!.<br/>Verifique os campos informados e certifique-se de que todos os campos foram preenchidos.';
            }



        } ?>


    </div>
</div>
<?php include_once('../inc/scripts.php'); ?>
</body>
</html>