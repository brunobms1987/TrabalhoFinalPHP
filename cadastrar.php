<?php
require './verifica_logado.php';
include './menu.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <input type="submit" value="Enviar"/><br>
        <form class="form-horizontal">
            <div class="form-group">
                <label for="note3" class="col-sm-2 control-label">Nome</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="note3" placeholder="Nome" required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">E-Mail</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="example@example.com" required>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="radio">
                        <label>
                            Tipo de Usuário:<br>
                            <input type="radio" name="Tipo" Value="1"> Administrador
                            <input type="radio" name="Tipo" Value="2" checked="checked"> Autor
                        </label>
                    </div>
                </div>
            </div>
            <br>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10" required>
                    <button type="submit" class="btn btn-default">Cadastrar</button>
                </div>
            </div>
        </form>
    </body>
</html>
