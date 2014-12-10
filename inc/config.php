<?php
//database
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

//rotas
$rotas = array("" => "home", "home" => "home", "empresa" => "empresa", "produtos" => "produtos", "servicos" => "servicos", "pesquisa" => "pesquisa");