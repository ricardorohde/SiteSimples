<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Contato - PHP Foundation + Twitter Bootstrap</title>
    <?php include_once('inc/head.php');?>
</head>
<body>
    <div class="container">

        <!-- TOPO -->
        <?php include_once('inc/topo.php'); ?>

        <!-- CONTEUDO -->
        <div class="col-lg-12" id="empresa">


        <?php if($_SERVER['REQUEST_METHOD']!='POST'){ ?>
        <div class="col-lg-5">
        <!-- FORMULÁRIO -->
        <form class="form-horizontal" name="contato" method="post" enctype="multipart/form-data" action="contato">
            <fieldset>
                <h2>Envie uma mensagem</h2>
                <p>Preencha corretamente o formulário abaixo e responderemos o mais breve possível.</p>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="nome">Nome:</label>
                    <div class="col-md-8">
                        <input id="nome" name="nome" type="text" placeholder="Informe seu nome" class="form-control input-md" required="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="email">E-mail:</label>
                    <div class="col-md-8">
                        <input id="email" name="email" type="text" placeholder="Informe seu e-mail" class="form-control input-md" required="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="assunto">Assunto:</label>
                    <div class="col-md-8">
                        <input id="assunto" name="assunto" type="text" placeholder="Qual o assunto?" class="form-control input-md" required="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="mensagem">Mensagem</label>
                    <div class="col-md-8">
                        <textarea class="form-control" id="mensagem" name="mensagem"></textarea>
                    </div>
                </div>

                <div class="form-group col-md-8" style="margin-left: 340px;">
                    <button id="enviar" name="enviar" type="submit" class="btn btn-primary">Enviar</button>
                </div>

            </fieldset>
        </form>
        </div>
        <div class="col-lg-5 col-lg-push-2 text-right">
            <h2>Nosso endereço</h2>
            <p>Rua José Boiteux, 96 Sala 05<br/>89500-000 - Centro - Caçador/SC<br/>atendimento@mz2.com.br</p>
            <img src="img/mapa.jpg" class="img-responsive" alt="Mapa de localização" />
        </div>
        <?php } else {

            $erros = '';

            //nome
            if(isset($_POST['nome']) and $_POST['nome']!=null){
                $nome = $_POST['nome'];
            } else {
                $nome = null;
                $erros .= 'Campo <strong>Nome</strong> inválido, volte e tente novamente.<br/>';
            }

            //email
            if(isset($_POST['email']) and $_POST['email']!=null){
                $email = $_POST['email'];
            } else {
                $email = null;
                $erros .= 'Campo <strong>E-mail</strong> inválido, volte e tente novamente.<br/>';
            }

            //assunto
            if(isset($_POST['assunto']) and $_POST['assunto']!=null){
                $assunto = $_POST['assunto'];
            } else {
                $assunto= null;
                $erros .= 'Campo <strong>Assunto</strong> inválido, volte e tente novamente.<br/>';
            }

            //mensagem
            if(isset($_POST['mensagem']) and $_POST['mensagem']!=null){
                $mensagem = $_POST['mensagem'];
            } else {
                $mensagem= null;
                $erros .= 'Campo <strong>Mensagem</strong> inválido, volte e tente novamente.';
            }

            if($nome!=null AND $email!=null AND $assunto!=null AND $mensagem!=null){
                    echo '<div class="col-lg-12">';
                    echo '<div class="alert alert-success" role="alert">Dados enviados com sucesso, abaixo seguem os dados que você enviou.</div>';
                    echo '<p>Nome: '.$nome.'</p>';
                    echo '<p>E-mail: '.$email.'</p>';
                    echo '<p>Assunto: '.$assunto.'</p>';
                    echo '<p>Mensagem: '.nl2br($mensagem).'</p>';
                    echo '</div>';
            } else {
                echo '<div class="col-lg-12">';
                echo '<div class="alert alert-warning" role="alert">'.$erros.'</div>';
                echo '</div>';
            }

            ?>
        <?php } ?>
        </div>


        </div>

    </div>

    <!-- RODAPE -->
    <?php include_once('inc/rodape.php'); ?>

<?php include_once('inc/scripts.php'); ?>
</body>
</html>