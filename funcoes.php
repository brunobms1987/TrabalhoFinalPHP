<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        function login($nome, $senha, $tempo = 10) {
            if ($nome == "bruno" && $senha == 123) {
                setcookie("usuario_logado", "1", time() + $tempo*60);
                header("Location:index.php");
            } else {
                setcookie("usuario_logado", null, time() - 3600);
                header("Location:login.php");
            }
        }

        function logout() {
            setcookie("usuario_logado", null, time() - 3600);
            header("Location:login.php");
        }

        function verifica() {
            if (isset($_COOKIE["usuario_logado"])) {
                
            } else {
                setcookie("usuario_logado", null, time() - 3600);
                header("Location:login.php");
            }
        }

        /*
          $id = "";
          $nome = "";
          if (isset($_POST['nome']) && isset($_POST['senha'])) {
          if ($_POST['nome'] == "bruno" && $_POST['senha'] == 123) {
          setcookie("usuario_logado", "1", time() + 3600);
          header("Location:index.php");
          } else {
          setcookie("usuario_logado", null, time() - 3600);
          header("Location:login.php");
          }
          }
         *
         */
        ?>
    </body>
</html>



