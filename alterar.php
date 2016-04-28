<?php
include './conexao.php';
$conexao = conecta();
$query = "update from usuarios set nome = '{$_POST['nome']}','{$_POST['senha']}','{$_POST['email']}' where id = {$_POST['id']}";
$resultado = inserir($conexao, $query);
echo $query;
if ($resultado) {
    echo "Usuário alterado.";
} else
    echo "Usuário não alterado.";
?>