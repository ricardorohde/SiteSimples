<?php
function conecta(){
    $driverDB = "mysql";
    $hostDB   = "localhost";
    $nomeDB = "sitesimples";
    $usuarioDB = "root";
    $senhaDB = "root";
    try {
        $conexao = new \PDO($driverDB . ':host=' . $hostDB . ';dbname=' . $nomeDB, $usuarioDB, $senhaDB);
        return $conexao;
    } catch (\PDOException $e) {
        die("Erro<br />Cód.: " . $e->getCode() . "<br />Mensagem: " . $e->getMessage());
    }
}

function getPagina($pagina){
    $sql = "SELECT * FROM paginas WHERE nome=:nome LIMIT 1";
    $conexao = conecta();
    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(':nome',$pagina,PDO::PARAM_STR);
    $stmt->execute();
    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
    return $resultado;
}

function getProdutosServicos($tipo){
    $sql = "SELECT * FROM produtoseservicos WHERE tipo=:tipo";
    $conexao = conecta();
    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(':tipo',$tipo,PDO::PARAM_STR);
    $stmt->execute();
    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $resultado;
}

function getBannerPaginas($pagina){
    $sql = "SELECT * FROM banners WHERE pagina=:pagina";
    $conexao = conecta();
    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(':pagina',$pagina,PDO::PARAM_STR);
    $stmt->execute();
    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
    if($stmt->rowCount()>0) {
        $banner ='<div class="jumbotron" style="background: url(img/'.$resultado['banner'].') top center no-repeat; height:315px;"><div class="col-md-4 col-md-offset-8 col-sm-2 col-sm-offset-10 hidden-xs"></div></div>';
        return $banner;
    } else {
        return 'nada';
    }
}

function pesquisaPaginasDB($p){
    $sql = "SELECT * FROM paginas WHERE conteudo LIKE ? OR titulo LIKE ?";
    $conexao = conecta();
    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(1,'%'.$p.'%');
    $stmt->bindValue(2,'%'.$p.'%');
    $stmt->execute();
    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $resultado;
}

function pesquisaProdutosServicosDB($p){
    $sql = "SELECT * FROM produtoseservicos WHERE titulo LIKE ? OR descricao LIKE ?";
    $conexao = conecta();
    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(1,'%'.$p.'%');
    $stmt->bindValue(2,'%'.$p.'%');
    $stmt->execute();
    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $resultado;
}

