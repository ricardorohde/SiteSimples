<?php
session_start();
require_once('inc/seguranca.php');
require_once('../inc/database.php');

if(isset($_POST['usuario']) and $_POST['usuario']!=''){
    $usuario = $_POST['usuario'];
} else {
    $usuario = null;
}

if(isset($_POST['senha']) and $_POST['senha']!=''){
    $senha = $_POST['senha'];
} else {
    $senha = null;
}

if(estaLogado()==false) {
    logar($usuario, $senha);
}

estaLogado();

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
        <h4>Escolha uma página para editar no menu superior.</h4>
    </div>
</div>
<!-- RODAPE -->
<?php include_once('../inc/scripts.php'); ?>
</body>
</html>