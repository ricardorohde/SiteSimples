<?php $pg = 'home'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Home - PHP Foundation + Twitter Bootstrap</title>
    <?php include_once('inc/head.php');?>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
</head>
<body>
    <div class="container">

        <!-- TOPO -->
        <?php include_once('inc/topo.php'); ?>

        <!-- BANNER -->
        <div class="jumbotron bannerHome">
            <div class="col-md-4 col-md-offset-8 col-sm-2 col-sm-offset-10 hidden-xs">
                <h2 class="hidden-sm">Soluções inteligentes, para clientes exigentes.</h2>
                <p><a class="btn btn-lg btn-primary" style="margin-top: 35px;" href="produtos.php">Saiba mais »</a></p>
            </div>
        </div>

        <!-- CONTEUDO -->
        <div class="col-lg-12" id="servicos">
            <div class="col-lg-4">
                <img class="img-circle" src="img/design.jpg" alt="Design Gráfico" style="width: 250px; height: 250px;">
                <h2>DESIGN GRÁFICO</h2>
                <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá, depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Sapien in monti palavris qui num significa nadis i pareci latim.</p>
                <p><a class="btn btn-default" href="produtos.php?p=grafico" role="button">Visualizar detahes »</a></p>
            </div>
            <div class="col-lg-4">
                <img class="img-circle" src="img/webdesign.jpg" alt="Design Web" style="width: 250px; height: 250px;">
                <h2>DESIGN WEB</h2>
                <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá, depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Sapien in monti palavris qui num significa nadis i pareci latim.</p>
                <p><a class="btn btn-default" href="produtos.php?p=web" role="button">Visualizar detahes »</a></p>
            </div>
            <div class="col-lg-4">
                <img class="img-circle" src="img/programacao.jpg" alt="Programação" style="width: 250px; height: 250px;">
                <h2>PROGRAMAÇÃO</h2>
                <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá, depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Sapien in monti palavris qui num significa nadis i pareci latim.</p>
                <p><a class="btn btn-default" href="produtos.php?p=programacao" role="button">Visualizar detahes »</a></p>
            </div>
        </div>
    </div>


    <!-- RODAPE -->
    <?php include_once('inc/rodape.php'); ?>

<?php include_once('inc/scripts.php'); ?>
</body>
</html>