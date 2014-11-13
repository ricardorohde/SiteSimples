<?php
if(isset($_POST['p']) and $_POST['p']!= null) {
$p = $_POST['p'];
    echo '<div class="col-lg-12" id="servicos">';
    $resultadosPaginas = pesquisaPaginasDB($p);
        if (!empty($resultadosPaginas)) {
            echo '<p>Abaixo apresentamos algumas páginas que contém o termo pesquisado.</p>';
            echo '<div class="list-group">';
                foreach ($resultadosPaginas as $resultado) {
                    echo '<a href="' . $resultado['nome'] . '" class="list-group-item">' . ucfirst($resultado['nome']) . '</a>';
                }
            echo '</div>';
        }

    $resultadosProdutosServicos = pesquisaProdutosServicosDB($p);
    if (!empty($resultadosProdutosServicos)) {
            echo '<p>Abaixo apresentamos alguns produtos e servicos que contém o termo pesquisado.</p>';
            echo '<div class="list-group">';
            foreach ($resultadosProdutosServicos as $resultado) {
                echo '<a href="' . $resultado['tipo'] . '" class="list-group-item">' . $resultado['titulo'] . '</a>';
            }
            echo '</div>';
        }

    // mensagem de erro para nada encontrado
    if(empty($resultadosPaginas) AND empty($resultadosProdutosServicos)){
        echo '<div class="alert alert-danger" role="alert">Nenhum resultado encontrado para o termo digitado ('.$p.')</div>';
    }

    echo '</div>';
    } else{
    echo '<div class="col-lg-12" id="servicos">';
    echo '<div class="alert alert-danger" role="alert">Digite um termo no campo de pesquisa acima.</div>';
    echo '</div>';
}