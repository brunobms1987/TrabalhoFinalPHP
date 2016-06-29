<!--Página referente às notícias...-->
<?php
$id = $_GET['id'];
$conexao = conecta();
$resultado = busca($conexao, "select * from noticia where id= $id");
$registro = mysqli_fetch_array($resultado);
$idAutor = $registro['idAutor'];
$idlogado = $_SESSION['idLogado'];
$tipoUser = $_SESSION['tipoLogado'];
$autorNoticia = busca($conexao, "SELECT id, usuario, nome from usuario where tipo > 1");
if ($idAutor == $idlogado || $tipoUser == 1) {
    ?>

    <div class="container-fluid">
        <div class="container">
            <form action="index.php?pag=11&acao=2" method="POST"  enctype="multipart/form-data">
                <input type="hidden" id="id" name="id" value="<?= $registro['id'] ?>">

                <div class="row">
                    <div class="col-md-8">
                        <label for="titulo">Título</label>
                        <input type="text" class="form-control" id="nome" name="titulo" required="" value="<?= $registro['titulo'] ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <label for="autor">Autor</label>
                        <?php
                        if ($tipoUser == 1) {
                            ?>
                            <select class = "form-control" id = "autor" name = "autor" value="<?= $registro['idAutor'] ?>"> <!--INCLUIR REGRA WHILE PARA IR ADICIONANDO AS OPÇÕES-->
                                <?=
                                "";
                                while ($linha = mysqli_fetch_array($autorNoticia)) {
                                    ?>
                                    <option value="<?= $linha['id'] ?>"><?= $linha['nome'] ?></option>
                                    <?=
                                    "";
                                };
                                ?><?=
                                "";
                            } else {
                                $autorNoticia = busca($conexao, "SELECT id, usuario, nome from usuario where id=$idAutor");
                                $linha = mysqli_fetch_array($autorNoticia);
                                ?>
                                <select class="form-control" id="autor" name="autor">
                                    <option value="<?= $linha['id'] ?>"><?= $linha['nome'] ?></option>
                                    <?=
                                    "";
                                }
                                ?>
                            </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <label for="corpo">Notícia</label>
                        <textarea id="descricao" class="form-control" name="corpo">
                            <?= $registro['noticia'] ?>
                        </textarea>   
                    </div>                
                </div>    
                <br>
                <div class="col-md-7">
                    <label for="imagem">Arquivo</label><br>
                    <img src="./img/noticias/<?= $registro['imagem'] ?>" width="200px" height="200px"/><br><br>
                    <input type="hidden" id="fotoantiga" name="fotoantiga" value="<?= $registro['imagem'] ?>">
                    <input type="file"  id="arquivo" name="arquivo" > 
                </div>  
        </div>
    </div>
    <br>
    <br>
    <a href="index.php" class="btn btn-danger"> Cancelar e Voltar </a>
    <input type="submit"  class="btn btn-success" value="Cadastrar">
    </form>
    <?=
    "";
} else {
    header('Location:index.php?pag=9');
}
?>