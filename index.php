<?php
require_once('inc/funcoes.php');
$request = $_SERVER["REQUEST_URI"];
$pg = obtemPagina($request);
//var_dump($pg);
incluiPagina($pg);
?>