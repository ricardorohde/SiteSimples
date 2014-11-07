<?php


function quebraRequest($request){
    //quebra a string a cada "/"
    $resultado = explode('/',$request);
    //remove itens vazios
    $resultado = array_filter($resultado);
    //reindexa os itens do array
    $resultado = array_values($resultado);
    //retorno o resultado do processamento em um array
    return $resultado;
}


function obtemPagina($request){
    $pagina = quebraRequest($request);
    if($pagina[1]!=null) {
        return $pagina[1];
    } else {
        return '404';
    }
}

function contaParametros($request){
    $total = quebraRequest($request);
    return count($total);
}

function incluiPagina($pg){
    //verifica se o arquivo existe
    if (file_exists('paginas/'.$pg.'.php')) {
        //inclui o arquivo
        include('paginas/'.$pg.'.php');
    } else {
        //inclui o arquivo de erro 404
        include('404.php');
    }
}

function obtemParametro($request)
{
    $parametro = quebraRequest($request);
    if ($parametro[2] != null) {
        return $parametro[2];
    } else {
        return null;
    }

}

?>