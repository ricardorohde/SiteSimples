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

function paginaDB($pagina){
    $sql = "SELECT * FROM paginas WHERE nome=:nome LIMIT 1";
    $conexao = conecta();
    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(':nome',$pagina,PDO::PARAM_STR);
    $stmt->execute();
    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
    return $resultado['conteudo'];
}

function pesquisaDB($p){
    $sql = "SELECT * FROM paginas WHERE conteudo LIKE ?";
    $conexao = conecta();
    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(1,'%'.$p.'%');
    $stmt->execute();
    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $resultado;
}