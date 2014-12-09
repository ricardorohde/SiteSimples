<?php

function logar($usuario,$senha){
    $senhaDB = getSenha($usuario);
    if(password_verify($senha,$senhaDB)){
        $_SESSION['logado']='1';
        return true;
    } else {
        header("Location: login.php");
        return false;
    }
}

function estaLogado(){
    if(isset($_SESSION['logado']) and $_SESSION['logado']==='1'){
        return true;
    } else {
        return false;
    }
}

function expulsaVisitante(){
    unset($_SESSION['logado']);
    session_destroy();
    header("Location: logout.php");
}

?>