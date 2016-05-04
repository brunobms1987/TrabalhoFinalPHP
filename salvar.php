<?php

include './conexao.php';
$conexao = conecta();
if ($_GET['acao'] == 1) {
    $query = "insert into usuarios(usuarios_nome, usuarios_senha, usuarios_email, usuarios_tipo, usuarios_data_nascimento) values('{$_POST['nome']}','{$_POST['senha']}','{$_POST['email']}','{$_POST['tipo']}','{$_POST['nascimento']}')";
    $resultado = inserir($conexao, $query);
    if ($resultado) {
        echo "Usuário cadastrado.";
    } else
        echo "Usuário não cadastrado";
}
if ($_GET['acao'] == 2) {
    $query = "update usuarios set usuarios_nome = '{$_POST['nome']}', usuarios_senha = '{$_POST['senha']}',usuarios_email ='{$_POST['email']}',usuarios_tipo ='{$_POST['tipo']}', usuarios_data_nascimento ='{$_POST['nascimento']}' where id = {$_POST['id']}";
    $resultado = alterar($conexao, $query);
    if ($resultado) {
        echo "Usuário alterado.";
    } else
        echo "Usuário não alterado";
}
header("location:listar.php");
?>