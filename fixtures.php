<?php
header ('Content-type: text/html; charset=UTF-8');

include('inc/database.php');

$conexao = conecta();

//deleta as tabelas existentes
echo 'Deletando tabela paginas<br/>';
$sql = "DROP TABLE paginas";
$stmt = $conexao->prepare($sql);
$stmt->execute();
$stmt = null;

echo 'Deletando tabela banners<br/>';
$sql = "DROP TABLE banner";
$stmt = $conexao->prepare($sql);
$stmt->execute();
$stmt = null;

echo 'Deletando tabela produtosservicos<br/>';
$sql = "DROP TABLE produtoseservicos";
$stmt = $conexao->prepare($sql);
$stmt->execute();
$stmt = null;


// cria tabela paginas
echo 'Recriando a tabela paginas<br/>';
$sql = "CREATE TABLE IF NOT EXISTS paginas (idpagina SMALLINT(5) UNSIGNED NOT NULL AUTO_INCREMENT, titulo VARCHAR(255) NOT NULL, nome VARCHAR(45) NOT NULL, conteudo MEDIUMTEXT NOT NULL, PRIMARY KEY (idpagina)) ENGINE = MyISAM DEFAULT CHARACTER SET = utf8 COLLATE = utf8_general_ci;";
$stmt = $conexao->prepare($sql);
$stmt->execute();
$stmt = null;


// cria tabela banners
echo 'Recriando a tabela banners<br/>';
$sql = "CREATE TABLE IF NOT EXISTS banners (idbanner SMALLINT(2) UNSIGNED NOT NULL AUTO_INCREMENT, banner VARCHAR(255) NOT NULL, pagina VARCHAR(45) NOT NULL, PRIMARY KEY (idbanner))ENGINE = MyISAM DEFAULT CHARACTER SET = utf8 COLLATE = utf8_general_ci;";
$stmt = $conexao->prepare($sql);
$stmt->execute();
$stmt = null;

// cria tabela banners
echo 'Recriando a tabela produtoseservicos<br/>';
$sql = "CREATE TABLE IF NOT EXISTS produtoseservicos (idprodutoeservico SMALLINT(2) UNSIGNED NOT NULL AUTO_INCREMENT, imagem VARCHAR(45) NOT NULL, titulo VARCHAR(255) NOT NULL,descricao VARCHAR(255) NOT NULL,tipo ENUM('produtos','servicos') NOT NULL, PRIMARY KEY (idprodutoeservico)) ENGINE = MyISAM DEFAULT CHARACTER SET = utf8 COLLATE = utf8_general_ci;";
$stmt = $conexao->prepare($sql);
$stmt->execute();
$stmt = null;

//insere dados nas tabelas
echo 'Inserindo páginas<br/>';
$sql = "INSERT INTO paginas (titulo, nome, conteudo)
        VALUES ('Home','home',''),
               ('Conheça nossa empresa','empresa','Conteudo página empresa'),
               ('Produtos','produtos',''),
               ('Serviços','servicos',''),
               ('404 - Página não encontrada','404','Oops. A página que você está tentando acessar está indisponível ou não existe, tente uma das opções do menu acima.');";
$stmt = $conexao->prepare($sql);
$stmt->execute();
$stmt = null;


echo 'Inserindo produtos<br/>';
$sql = "INSERT INTO produtoseservicos (titulo, descricao, tipo, imagem)
        VALUES ('DESIGN GRÁFICO','Descrição do produto design gráfico','produtos','design.jpg'),
               ('DESIGN WEB','Descrição do produto Design web','produtos', 'webdesign.jpg'),
               ('PROGRAMAÇÃO','Descrição do produto programação','produtos','programacao.jpg')";
$stmt = $conexao->prepare($sql);
$stmt->execute();
$stmt = null;


echo 'Inserindo serviços<br/>';
$sql = "INSERT INTO produtoseservicos (titulo, descricao, tipo)
        VALUES ('LOGOMARCAS','Descrição do serviço logomarca','servicos'),
               ('SEO (SEARCH ENGINE OPTIMIZATION)','Descrição do serviço de SEO','servicos'),
               ('OTIMIZAÇÃO DE WEBSITES','Descrição do serviço de otimização de websites','servicos')";
$stmt = $conexao->prepare($sql);
$stmt->execute();
$stmt = null;

echo 'Inserindo banners<br/>';
$sql = "INSERT INTO banners (banner, pagina)
        VALUES ('bgBanner.jpg','home'),
               ('bgBannerEmpresa.jpg','empresa'),
               ('bgBannerProdutos.jpg','produtos'),
               ('bgBannerServicos.jpg','servicos');";
$stmt = $conexao->prepare($sql);
$stmt->execute();
$stmt = null;
