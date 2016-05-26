<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="arquivos/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
        <?php

        function login($nome, $senha, $tempo = 10) {
            if ($nome == $_POST['nome'] && $senha == $_POST['senha']) {
                header("Location:listar.php");
            } else {
                session_destroy();
                header("Location:login.php?erro=1");
            }
        }

        function logout() {
            session_destroy();
            header("Location:index.php");
        }

        function verifica() {
            if (isset($_COOKIE["usuario_logado"])) {
                
            } else {
                session_destroy();
                header("Location:login.php");
            }
        }

        $sair = isset($_GET['sair']) ? $_GET['sair'] : 0;
        if ($sair == 1) {
            logout();
        }
        ?>
    </body>
</html>



