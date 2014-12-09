<?php
$rotas = array("" => "home", "home" => "home", "empresa" => "empresa", "produtos" => "produtos", "servicos" => "servicos", "pesquisa" => "pesquisa");
function rotaAtual(){
    $atual = str_replace(".php", "", substr($_SERVER["REQUEST_URI"], strrpos($_SERVER["REQUEST_URI"], "/") + 1));
    if($atual!='') {
        return $atual;
    } else {
        return 'home';
    }
}

//retorna se a rota atua está no array das rotas
function validaRota($atual, $rotas){
    return array_key_exists($atual, $rotas);
}

function obtemPagina($rotas){
    if (validaRota(rotaAtual(), $rotas)) {
        $pagina = $rotas[rotaAtual()];
        if ($pagina != 'pesquisa') {
            return (getPagina($pagina));
            return true;
        }
    } else {
// pagina invalida
        header('HTTP/1.0 404 Not Found');
        echo(getPagina('404'));
        return false;
    }

}