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
                setcookie("usuario_logado", "1", time() + $tempo * 60);
                setcookie("nome_usuario", $nome, time() + $tempo * 60);
                header("Location:listar.php");
            } else {
                setcookie("usuario_logado", null, time() - 3600);
                header("Location:login.php?erro=1");
            }
        }

        function logout() {
            setcookie("usuario_logado", null, time() - 3600);
            header("Location:index.php");
        }

        function verifica() {
            if (isset($_COOKIE["usuario_logado"])) {
                
            } else {
                setcookie("usuario_logado", null, time() - 3600);
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



