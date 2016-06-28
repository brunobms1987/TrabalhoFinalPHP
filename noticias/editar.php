<!--Página referente às notícias...-->
<?php
$id = $_GET['id'];

$conexao = conecta();

$resultado = busca($conexao, "select * from noticia where id= $id");

$registro = mysqli_fetch_array($resultado);
?>

<div class="container-fluid">
    <div class="container">
        <form action="index.php?pag=11&acao=2" method="POST"  enctype="multipart/form-data">
            <input type="hidden" id="id" name="id" value="<?= $registro['id'] ?>">

            <div class="row">
                <div class="col-md-4">
                    <label for="titulo">Título</label>
                    <input type="text" class="form-control" id="nome" name="titulo" required="" value="<?= $registro['titulo'] ?>">
                </div>
                <div class="col-md-4">
                    <label for="autor">Autor</label>
                    <input type="text" class="form-control" id="usuario" name="autor" required="" value="<?= $registro['idAutor'] ?>">
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
            <div class="row">
                <div class="col-md-5">
                    <img src="./img/noticias/<?= $registro['imagem'] ?>"/>
                    <input type="hidden" id="fotoantiga" name="fotoantiga" value="<?= $registro['imagem'] ?>">
                </div>
                <div class="col-md-7">
                    <label for="imagem">Arquivo</label>
                    <input type="file"  id="arquivo" name="imagem" >    
                </div>                
            </div>  
    </div>
</div>
<br>
<br>
<a href="index.php" class="btn btn-danger"> Cancelar e Voltar </a>
<input type="submit"  class="btn btn-success" value="Cadastrar">
</form>
