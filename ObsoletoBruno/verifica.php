<?php
include './conexao.php';
$conexao = conecta();
$query = "select * from usuarios where usuarios_nome='{$_POST['nome']}' and usuarios_senha='{$_POST['senha']}'";
$resultado = mysqli_query($conexao, $query);
if (mysqli_num_rows($resultado) > 0) {
    $linha = mysqli_fetch_array($resultado);
    session_start();

    $_SESSION['loginLogado'] = $linha['usuarios_nome'];
    $_SESSION['senhaLogado'] = $linha['usuarios_senha'];
    $_SESSION['nomeLogado'] = $linha['usuarios_nome'];
    echo "Testou no banco de dados";
    desconecta($conexao);
    header('Location:listar.php');
} else {
    desconecta($conexao);
    header('Location:login.php?erro=1');
}
?>