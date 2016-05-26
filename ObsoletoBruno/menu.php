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
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="img/default.jpg">
                </div>
                <div class="col-md-4" >

                </div>
                <div class="col-md-4" >
                    <div class="row">                       
                        <div class="col-md-12">
                            Bem vindo Fulano - <a href="#"> Sair do sistema </a>
                        </div>

                    </div>   
                    <div class="row">                       
                        <div class="col-md-12">                               
                            <a href="#"> Usuários  </a> - <a href="#"> Notícias </a>
                        </div>                        
                    </div>   
                </div>

            </div>   
        </div>
    </div>
</nav>