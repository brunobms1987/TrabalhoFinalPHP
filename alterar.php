<?php
include './conexao.php';
$conexao = conecta();
$query = "update usuarios set usuarios_nome = '{$_POST['usuarios_nome']}', usuarios_senha = '{$_POST['usuarios_senha']}',usuarios_email ='{$_POST['usuarios_email']}',usuarios_tipo ='{$_POST['usuarios_tipo']}', usuarios_data_nascimento ='{$_POST['usuarios_data_nascimento']}' where id = {$_POST['id']}";
$resultado = inserir($conexao, $query);
echo $query;
if ($resultado) {
    echo "Usuário alterado.";
	echo "Teste.";
} else
    echo "Usuário não alterado.";
?>