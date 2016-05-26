<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include './conexao.php';
        $conexao = conecta();
        $query = "delete from usuarios where id = ({$_GET['id']})";
        $resultado = excluir($conexao, $query);
        if ($resultado) {
            echo "Usuário excluído.";
        } else
            echo "Usuário não excluído.";
        header("location:listar.php");
        ?>
    </body>
</html>
