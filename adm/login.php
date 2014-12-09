<?php
session_start();
require_once('../inc/database.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Painel Administrativo Site Simples</title>
    <?php require('inc/head.php');?>
</head>
<body>
<div class="container">
    <div class="col-lg-6 col-lg-push-3" id="servicos">
            <div class="col-lg-10 col-lg-push-1">
                <!-- FORMULÁRIO -->
                <form class="form-horizontal" name="login" method="post" enctype="multipart/form-data" action="index.php">
                    <fieldset>
                        <h2>Página de login</h2>
                         <div class="form-group">
                            <label class="col-md-4 control-label" for="usuario">Usuario:</label>
                            <div class="col-md-8">
                                <input id="usuario" name="usuario" type="text" placeholder="Digite seu usuário" class="form-control input-md" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="senha">Senha:</label>
                            <div class="col-md-8">
                                <input id="senha" name="senha" type="password" placeholder="Digite sua senha" class="form-control input-md" required="">
                            </div>
                        </div>

                         <div class="form-group col-md-8" style="margin-left: 340px;">
                            <button id="enviar" name="login" type="submit" class="btn btn-primary">Login</button>
                        </div>

                    </fieldset>
                </form>
            </div>
    </div>
</div>
<!-- RODAPE -->
<?php include_once('../inc/scripts.php'); ?>
</body>
</html>