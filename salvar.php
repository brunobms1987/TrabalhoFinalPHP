<?php

include './conexao.php';
$conexao = conecta();
if ($_GET['acao'] == 1) {
    $query = "insert into usuarios(nome, senha,email) values('{$_POST['nome']}','{$_POST['senha']}','{$_POST['email']}')";
    $resultado = inserir($conexao, $query);
    if ($resultado) {
        echo "Usuário cadastrado.";
    } else
        echo "Usuário não cadastrado";
}
if ($_GET['acao'] == 2) {
    $query = "update usuarios set nome = '{$_POST['nome']}',senha = '{$_POST['senha']}', email = '{$_POST['email']}' where id = {$_POST['id']}";
    $resultado = alterar($conexao, $query);
    if ($resultado) {
        echo "Usuário alterado.";
    } else
        echo "Usuário não alterado";
}
header("location:listar.php");
?>