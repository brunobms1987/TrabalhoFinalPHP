<?php
require './verifica_logado.php';
$nome_usuario = $_SESSION['nomeLogado'];
?>
<img src="arquivos/imagens/Logo.png" alt="" width="200"/><br>
<?= $nome_usuario ?> - <a href="funcoes.php?sair=1">Sair</a><br>
<a href="listar.php">Usuários</a><br> <!--Incluir verificação se é admin-->
<a href="index.php">Notícias</a><br>
<br>
<br>