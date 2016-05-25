<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="arquivos/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <title>Editar</title>
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
            <input type="text" name="id" value="<?= $registro['id'] ?>" hidden=""><br>
            Nome do Pinguancho: <input type="text" name="nome" value="<?= $registro['usuarios_nome'] ?>" required><br>
            Senha: <input type="password" name="senha" value="<?= $registro['usuarios_senha'] ?>" required><br>
            E-Mail: <input type="email" name="email" value="<?= $registro['usuarios_email'] ?>" required><br>
            Nascimento: <input type="date" name="nascimento" value="<?= $registro['usuarios_data_nascimento'] ?>" required><br>

            <?php if ($registro['usuarios_tipo'] == 1) { ?>
                Administrador <input type="radio" name="tipo" value="1" checked="checked"/>
                Autor <input type="radio" name="tipo" value="2"/>
            <?php } if ($registro['usuarios_tipo'] == 2) {
                ?>
                Administrador <input type="radio" name="tipo" value="1"/>
                Autor <input type="radio" name="tipo" value="2" checked="checked"/>
                <?php
            }
            ?>
            <br><br><input type="submit" value="Salvar"/><br>
        </form>
    </body>     
</html>