<?php

function getPagina($pagina){
    $sql = "SELECT * FROM paginas WHERE nome=:nome LIMIT 1";
    $conexao = conecta();
    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(':nome',$pagina,PDO::PARAM_STR);
    $stmt->execute();
    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
    return $resultado;
}

function getUmProdutoServico($id){
    $sql = "SELECT * FROM produtoseservicos WHERE idprodutoeservico=:id LIMIT 1";
    $conexao = conecta();
    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(':id',$id,PDO::PARAM_INT);
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

function getSenha($usuario){
    $sql = "SELECT senha FROM usuarios WHERE usuario = :usuario LIMIT 1";
    $conexao = conecta();
    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(':usuario',$usuario,PDO::PARAM_STR);
    $stmt->execute();
    if($stmt->rowCount()>0) {
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
        return $resultado['senha'];
    } else {
        return false;
    }
}

function getPaginasEditaveis(){
    $sql = "SELECT * FROM paginas ORDER BY nome ASC";
    $conexao = conecta();
    $stmt = $conexao->prepare($sql);
    $stmt->execute();
    if($stmt->rowCount()>0) {
        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    } else {
        return false;
    }
}



function updatePagina($idpagina,$titulo,$conteudo){
    $sql = "UPDATE paginas SET titulo=:titulo, conteudo=:conteudo WHERE idpagina=:idpagina LIMIT 1";
    $conexao = conecta();
    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(':idpagina',$idpagina,PDO::PARAM_INT);
    $stmt->bindParam(':titulo',$titulo,PDO::PARAM_STR);
    $stmt->bindParam(':conteudo',$conteudo,PDO::PARAM_STR);
    $stmt->execute();
    if($stmt->rowCount()>0) {
        return true;
    } else {
        return false;
    }
}

function updateProdutoServico($idprodutoeservico,$titulo,$descricao){
    $sql = "UPDATE produtoseservicos SET titulo=:titulo, descricao=:descricao WHERE idprodutoeservico=:idprodutoeservico LIMIT 1";
    $conexao = conecta();
    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(':idprodutoeservico',$idprodutoeservico,PDO::PARAM_INT);
    $stmt->bindParam(':titulo',$titulo,PDO::PARAM_STR);
    $stmt->bindParam(':descricao',$descricao,PDO::PARAM_STR);
    $stmt->execute();
    if($stmt->rowCount()>0) {
        return true;
    } else {
        return false;
    }
}