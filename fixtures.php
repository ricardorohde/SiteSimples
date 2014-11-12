<?php
header ('Content-type: text/html; charset=UTF-8');
require_once('inc/database.php');

//deleta as tabelas existentes
echo 'Deletando tabela paginas<br/>';
$sql = "DROP TABLE paginas";
$stmt = $conexao->prepare($sql);
$stmt->execute();
$stmt = null;


// cria tabela paginas
echo 'Recriando a tabela paginas<br/>';
$sql = "CREATE TABLE IF NOT EXISTS paginas (idpagina SMALLINT(5) UNSIGNED NOT NULL AUTO_INCREMENT, nome VARCHAR(45) NOT NULL, conteudo MEDIUMTEXT NOT NULL, PRIMARY KEY (idpagina)) ENGINE = MyISAM DEFAULT CHARACTER SET = utf8 COLLATE = utf8_general_ci;";
$stmt = $conexao->prepare($sql);
$stmt->execute();
$stmt = null;


//insere dados nas tabelas
echo 'Inserindo Home<br/>';
$sql = "INSERT INTO paginas (idpagina, nome, conteudo) VALUES (1, 'home', '<div class=\"jumbotron bannerHome\">
    <div class=\"col-md-4 col-md-offset-8 col-sm-2 col-sm-offset-10 hidden-xs\">
        <h2 class=\"hidden-sm\">Soluções inteligentes, para clientes exigentes.</h2>
        <p><a class=\"btn btn-lg btn-primary\" style=\"margin-top: 35px;\" href=\"produtos\">Saiba mais »</a></p>
    </div>
</div>

<div class=\"col-lg-12\" id=\"servicos\">
    <div class=\"col-lg-4\">
        <img class=\"img-circle\" src=\"img/design.jpg\" alt=\"Design Gráfico\" style=\"width: 250px; height: 250px;\">
        <h2>DESIGN GRÁFICO</h2>
        <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá, depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Sapien in monti palavris qui num significa nadis i pareci latim.</p>
        <p><a class=\"btn btn-default\" href=\"produtos\" role=\"button\">Visualizar detahes »</a></p>
    </div>
    <div class=\"col-lg-4\">
        <img class=\"img-circle\" src=\"img/webdesign.jpg\" alt=\"Design Web\" style=\"width: 250px; height: 250px;\">
        <h2>DESIGN WEB</h2>
        <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá, depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Sapien in monti palavris qui num significa nadis i pareci latim.</p>
        <p><a class=\"btn btn-default\" href=\"produtos\" role=\"button\">Visualizar detahes »</a></p>
    </div>
    <div class=\"col-lg-4\">
        <img class=\"img-circle\" src=\"img/programacao.jpg\" alt=\"Programação\" style=\"width: 250px; height: 250px;\">
        <h2>PROGRAMAÇÃO</h2>
        <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá, depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Sapien in monti palavris qui num significa nadis i pareci latim.</p>
        <p><a class=\"btn btn-default\" href=\"produtos\" role=\"button\">Visualizar detahes »</a></p>
    </div>
</div>')";
$stmt = $conexao->prepare($sql);
$stmt->execute();
$stmt = null;


echo 'Inserindo Empresa<br/>';
$sql = "INSERT INTO paginas (idpagina, nome, conteudo) VALUES (2, 'empresa', '<div class=\"jumbotron bannerEmpresa\">
    <div class=\"col-md-4 col-md-offset-8 col-sm-2 col-sm-offset-10 hidden-xs\"></div>
</div>

<div class=\"col-lg-12\" id=\"empresa\">
    <div class=\"col-lg-12\">
        <h2>QUEM SOMOS:</h2>
        <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
        <p>Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Interagi no mé, cursus quis, vehicula ac nisi. Aenean vel dui dui. Nullam leo erat, aliquet quis tempus a, posuere ut mi. Ut scelerisque neque et turpis posuere pulvinar pellentesque nibh ullamcorper. Pharetra in mattis molestie, volutpat elementum justo. Aenean ut ante turpis. Pellentesque laoreet mé vel lectus scelerisque interdum cursus velit auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ac mauris lectus, non scelerisque augue. Aenean justo massa.</p>
        <p>Casamentiss faiz malandris se pirulitá, Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer Ispecialista im mé intende tudis nuam golada, vinho, uiski, carirí, rum da jamaikis, só num pode ser mijis. Adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
    </div>
</div>')";
$stmt = $conexao->prepare($sql);
$stmt->execute();
$stmt = null;


echo 'Inserindo Produtos<br/>';
$sql = "INSERT INTO paginas (idpagina, nome, conteudo) VALUES (3, 'produtos', '<div class=\"jumbotron bannerProdutos\">
    <div class=\"col-md-4 col-md-offset-8 col-sm-2 col-sm-offset-10 hidden-xs\"></div>
</div>

<div class=\"col-lg-12\" id=\"empresa\">

    <div class=\"col-lg-12\">
        <h2>DESIGN GRÁFICO:</h2>
        <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
        <p>Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Interagi no mé, cursus quis, vehicula ac nisi. Aenean vel dui dui. Nullam leo erat, aliquet quis tempus a, posuere ut mi. Ut scelerisque neque et turpis posuere pulvinar pellentesque nibh ullamcorper. Pharetra in mattis molestie, volutpat elementum justo. Aenean ut ante turpis. Pellentesque laoreet mé vel lectus scelerisque interdum cursus velit auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ac mauris lectus, non scelerisque augue. Aenean justo massa.</p>
        <p>Casamentiss faiz malandris se pirulitá, Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer Ispecialista im mé intende tudis nuam golada, vinho, uiski, carirí, rum da jamaikis, só num pode ser mijis. Adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
    </div>

    <div class=\"col-lg-12\">
        <h2>DESIGN WEB:</h2>
        <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
        <p>Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Interagi no mé, cursus quis, vehicula ac nisi. Aenean vel dui dui. Nullam leo erat, aliquet quis tempus a, posuere ut mi. Ut scelerisque neque et turpis posuere pulvinar pellentesque nibh ullamcorper. Pharetra in mattis molestie, volutpat elementum justo. Aenean ut ante turpis. Pellentesque laoreet mé vel lectus scelerisque interdum cursus velit auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ac mauris lectus, non scelerisque augue. Aenean justo massa.</p>
        <p>Casamentiss faiz malandris se pirulitá, Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer Ispecialista im mé intende tudis nuam golada, vinho, uiski, carirí, rum da jamaikis, só num pode ser mijis. Adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
    </div>

    <div class=\"col-lg-12\">
        <h2>PROGRAMAÇÃO:</h2>
        <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
        <p>Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Interagi no mé, cursus quis, vehicula ac nisi. Aenean vel dui dui. Nullam leo erat, aliquet quis tempus a, posuere ut mi. Ut scelerisque neque et turpis posuere pulvinar pellentesque nibh ullamcorper. Pharetra in mattis molestie, volutpat elementum justo. Aenean ut ante turpis. Pellentesque laoreet mé vel lectus scelerisque interdum cursus velit auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ac mauris lectus, non scelerisque augue. Aenean justo massa.</p>
        <p>Casamentiss faiz malandris se pirulitá, Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer Ispecialista im mé intende tudis nuam golada, vinho, uiski, carirí, rum da jamaikis, só num pode ser mijis. Adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
    </div>

</div>')";
$stmt = $conexao->prepare($sql);
$stmt->execute();
$stmt = null;


echo 'Inserindo Serviços<br/>';
$sql = "INSERT INTO paginas (idpagina, nome, conteudo) VALUES (4, 'servicos', '<div class=\"jumbotron bannerServicos\">
    <div class=\"col-md-4 col-md-offset-8 col-sm-2 col-sm-offset-10 hidden-xs\"></div>
</div>

<div class=\"col-lg-12\" id=\"empresa\">

    <div class=\"col-lg-12\">
        <h2>LOGOMARCAS:</h2>
        <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
        <p>Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Interagi no mé, cursus quis, vehicula ac nisi. Aenean vel dui dui. Nullam leo erat, aliquet quis tempus a, posuere ut mi. Ut scelerisque neque et turpis posuere pulvinar pellentesque nibh ullamcorper. Pharetra in mattis molestie, volutpat elementum justo. Aenean ut ante turpis. Pellentesque laoreet mé vel lectus scelerisque interdum cursus velit auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ac mauris lectus, non scelerisque augue. Aenean justo massa.</p>
        <p>Casamentiss faiz malandris se pirulitá, Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer Ispecialista im mé intende tudis nuam golada, vinho, uiski, carirí, rum da jamaikis, só num pode ser mijis. Adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
    </div>

    <div class=\"col-lg-12\">
        <h2>SEO (SEARCH ENGINE OPTIMIZATION):</h2>
        <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
        <p>Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Interagi no mé, cursus quis, vehicula ac nisi. Aenean vel dui dui. Nullam leo erat, aliquet quis tempus a, posuere ut mi. Ut scelerisque neque et turpis posuere pulvinar pellentesque nibh ullamcorper. Pharetra in mattis molestie, volutpat elementum justo. Aenean ut ante turpis. Pellentesque laoreet mé vel lectus scelerisque interdum cursus velit auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ac mauris lectus, non scelerisque augue. Aenean justo massa.</p>
        <p>Casamentiss faiz malandris se pirulitá, Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer Ispecialista im mé intende tudis nuam golada, vinho, uiski, carirí, rum da jamaikis, só num pode ser mijis. Adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
    </div>

    <div class=\"col-lg-12\">
        <h2>OTIMIZAÇÃO DE WEBSITES:</h2>
        <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
        <p>Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Interagi no mé, cursus quis, vehicula ac nisi. Aenean vel dui dui. Nullam leo erat, aliquet quis tempus a, posuere ut mi. Ut scelerisque neque et turpis posuere pulvinar pellentesque nibh ullamcorper. Pharetra in mattis molestie, volutpat elementum justo. Aenean ut ante turpis. Pellentesque laoreet mé vel lectus scelerisque interdum cursus velit auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ac mauris lectus, non scelerisque augue. Aenean justo massa.</p>
        <p>Casamentiss faiz malandris se pirulitá, Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer Ispecialista im mé intende tudis nuam golada, vinho, uiski, carirí, rum da jamaikis, só num pode ser mijis. Adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
    </div>

</div>')";
$stmt = $conexao->prepare($sql);
$stmt->execute();
$stmt = null;


echo 'Inserindo Contato<br/>';
$sql = "INSERT INTO paginas (idpagina, nome, conteudo) VALUES (5, 'contato', '<div class=\"col-lg-12\" id=\"servicos\">
<div class=\"col-lg-5\">
<form class=\"form-horizontal\" name=\"contato\" method=\"post\" enctype=\"multipart/form-data\" action=\"contato\">
    <fieldset>
        <h2>Envie uma mensagem</h2>
        <p>Preencha corretamente o formulário abaixo e responderemos o mais breve possível.</p>
        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"nome\">Nome:</label>
            <div class=\"col-md-8\">
                <input id=\"nome\" name=\"nome\" type=\"text\" placeholder=\"Informe seu nome\" class=\"form-control input-md\" required=\"\">
            </div>
        </div>
        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"email\">E-mail:</label>
            <div class=\"col-md-8\">
                <input id=\"email\" name=\"email\" type=\"text\" placeholder=\"Informe seu e-mail\" class=\"form-control input-md\" required=\"\">
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"assunto\">Assunto:</label>
            <div class=\"col-md-8\">
                <input id=\"assunto\" name=\"assunto\" type=\"text\" placeholder=\"Qual o assunto?\" class=\"form-control input-md\" required=\"\">
            </div>
        </div>

        <div class=\"form-group\">
            <label class=\"col-md-4 control-label\" for=\"mensagem\">Mensagem</label>
            <div class=\"col-md-8\">
                <textarea class=\"form-control\" id=\"mensagem\" name=\"mensagem\"></textarea>
            </div>
        </div>

        <div class=\"form-group col-md-8\" style=\"margin-left: 340px;\">
            <button id=\"enviar\" name=\"enviar\" type=\"submit\" class=\"btn btn-primary\">Enviar</button>
        </div>

    </fieldset>
</form>
</div>
<div class=\"col-lg-5 col-lg-push-2 text-right\">
    <h2>Nosso endereço</h2>
    <p>Rua José Boiteux, 96 Sala 05<br/>89500-000 - Centro - Caçador/SC<br/>atendimento@mz2.com.br</p>
    <img src=\"img/mapa.jpg\" class=\"img-responsive\" alt=\"Mapa de localização\" />
</div>
</div>')";
$stmt = $conexao->prepare($sql);
$stmt->execute();
$stmt = null;


echo 'Inserindo Página 404<br/>';
$sql = "INSERT INTO paginas (idpagina, nome, conteudo) VALUES (6, '404', '<div class=\"col-lg-12\" id=\"servicos\">
    <p>Oops. A página que você está tentando acessar está indisponível ou não existe, tente uma das opções do menu acima.</p>
</div>')";
$stmt = $conexao->prepare($sql);
$stmt->execute();
$stmt = null;