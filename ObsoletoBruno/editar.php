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


        <form class="form-horizontal" method="post" action="salvar.php?acao=2" enctype="multipart/form-data">
            <input type="text" name="id" value="<?= $registro['id'] ?>" hidden=""><br>
            <div class="form-group">
                <label for="note3" class="col-sm-2 control-label">Nome</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nome" value="<?= $registro['usuarios_nome'] ?>" id="note3" placeholder="Nome" required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">E-Mail</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" value="<?= $registro['usuarios_email'] ?>" id="inputEmail3" placeholder="example@example.com" required>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Senha</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" name="senha" id="inputPassword3" value="<?= $registro['usuarios_senha'] ?>" placeholder="Password" required>
                </div>
            </div>
            <div class="form-group">
                <label for="dataNascimento" class="col-sm-2 control-label">Data de Nascimento</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" value="<?= $registro['usuarios_data_nascimento'] ?>" name="nascimento" id="inputPassword3" required>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="radio">
                        <label>
                            Tipo de Usuário:<br>
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
                        </label>
                    </div>
                </div>
            </div>



            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label" >Descrição</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="descricao" rows="5" cols="40" required><?= $registro['usuarios_descricao'] ?></textarea>
                </div>
            </div>
            <br>Foto:<br>
            <input type="file" name="arquivos" value="<?= $registro['usuarios_foto'] ?>"<br>
            <br>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10" required>
                    <button type="submit" class="btn btn-default">Cadastrar</button>
                </div>
            </div>
        </form>







        <form method="post" action="salvar.php?acao=2">
            <input type="text" name="id" value="<?= $registro['id'] ?>" hidden=""><br>
            Nome do Pinguancho: <input type="text" name="nome" value="<?= $registro['usuarios_nome'] ?>" required><br>
            Senha: <input type="password" name="senha" value="<?= $registro['usuarios_senha'] ?>" required><br>
            E-Mail: <input type="email" name="email" value="<?= $registro['usuarios_email'] ?>" required><br>
            Nascimento: <input type="date" name="nascimento" value="<?= $registro['usuarios_data_nascimento'] ?>" required><br>


            <br><br><input type="submit" value="Salvar"/><br>
        </form>
    </body>     
</html>