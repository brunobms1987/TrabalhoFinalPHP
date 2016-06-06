<?php

include './config/conexao.php';
$conexao = conecta();
$query = "select * from usuario where usuario='{$_POST['usuario']}' and senha='{$_POST['senha']}'";
$resultado = mysqli_query($conexao, $query);
if (mysqli_num_rows($resultado) > 0) {
    $linha = mysqli_fetch_array($resultado);
    session_start();

    $_SESSION['loginLogado'] = $linha['usuario'];
    $_SESSION['idLogado'] = $linha['id'];
    $_SESSION['tipoLogado'] = $linha['tipo'];
    $_SESSION['senhaLogado'] = $linha['senha'];
    $_SESSION['nomeLogado'] = $linha['nome'];
    desconecta($conexao);
    header('Location:index.php?pag=4');
} else {
    desconecta($conexao);
    header('Location:login.php?erro=1');
}
?>