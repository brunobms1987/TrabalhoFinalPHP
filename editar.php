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
        $query = "select * from usuarios where id = {$_GET['id']}";
        $resultado = buscar($conexao, $query);
        $registro = mysqli_fetch_array($resultado);
        ?>
        <form method="post" action="salvar.php?acao=2">
            <input type="text" name="id" value="<?=$registro['id']?>" hidden=""><br>
            Nome do Pinguancho: <input type="text" name="nome" value="<?= $registro['nome']?>" required><br>
            Senha: <input type="password" name="senha" value="<?= $registro['senha'] ?>" required><br>
            E-Mail: <input type="email" name="email" value="<?= $registro['email'] ?>" required><br>
            <input type="submit" value="Enviar"/><br>
        </form>
       
    </body>
</html>
