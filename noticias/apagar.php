<!--Página referente às notícias...-->
<?php

include '../config/conexao.php';

if (isset($_GET['id'])) {
    $conexao = conecta();

    $resultado = exclui($conexao, "delete from noticia where id={$_GET['id']}");

    if ($resultado) {
        header("Location: ../index.php?pag=9");
    }
}
?> 