<?php
$nome = $_POST['nome'];
$senha = $_POST['senha'];
include_once './funcoes.php';
login($nome, $senha);
?>