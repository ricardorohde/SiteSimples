<?php
session_start();
require_once('inc/seguranca.php');
require_once('../inc/database.php');

if(estaLogado()==false){
    expulsaVisitante();
}

if(isset($_GET['p']) and $_GET['p']!= null){
    $p = $_GET['p'];
} else{
    $p = null;
}

if($p!=null) {
    $pagina = getPagina($p);
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
            <h4>Editando a página: <?php echo $pagina['titulo']; ?></h4>
                <br/>
                <form name="editar" method="post" enctype="multipart/form-data" action="editar.php" role="form">
                    <div class="form-group">
                        <label for="titulo">Título da página</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo $pagina['titulo']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="conteudo">Conteúdo da página</label>
                        <textarea name="conteudo" id="conteudo"><?php echo $pagina['conteudo']; ?></textarea>
                    </div>

                    <input type="hidden" name="idpagina" value="<?php echo $pagina['idpagina']; ?>">

                    <button type="submit" class="btn btn-default">Salvar alterações</button>

                </form>
                <script>CKEDITOR.replace('conteudo');</script>
            <?php } else { ?>
                <h4>Página inválida!</h4><br/>
                <p>Selecione uma página no menu acima</p>
            <?php } ?>
        <?php } else {

            // var_dump($_POST);

            if(isset($_POST['idpagina']) and $_POST['idpagina']!=null){
                $idpagina = $_POST['idpagina'];
            } else {
                $idpagina = null;
            }

            if(isset($_POST['titulo']) and $_POST['titulo']!=null){
                $titulo = $_POST['titulo'];
            } else{
                $titulo = null;
            }

            if(isset($_POST['conteudo']) and $_POST['conteudo']!=null){
                $conteudo = $_POST['conteudo'];
            } else {
                $conteudo = null;
            }

            if($idpagina !=null and $titulo!=null and $conteudo!= null){
                //insere os dados
                if(updatePagina($idpagina,$titulo,$conteudo)) {
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