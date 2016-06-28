<!--Página referente às notícias...-->
<script>
    $(document).ready(function () {
        $("#gerador").change(function () {
            if ($(this).is(":checked")) {
                $("#senha").prop("disabled", true);
                $("#senha").prop("required", false);
            }
            else {
                $("#senha").prop("disabled", false);
                $("#senha").prop("required", true);
            }
        });
    });
</script>
<?php
$conexao = conecta();
include_once './verifica_logado.php';
$tipoUser = $_SESSION['tipoLogado'];
$id = $_SESSION['idLogado'];
if ($tipoUser == 1) {
    $autorNoticia = busca($conexao, "SELECT id, usuario, nome from usuario where tipo > 1");
} else if ($tipoUser != 1) {
    $autorNoticia = busca($conexao, "SELECT id, usuario, nome from usuario where id=$id");
}
$linha = mysqli_fetch_array($autorNoticia);
?>
<div class="container-fluid">
    <div class="container">
        <form action="index.php?pag=11&acao=1" method="POST"  enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-12">
                    <label for="titulo">Título</label>
                    <input type="text" class="form-control" id="nome" name="titulo" required="">
                </div>
            </div>   

            <div class="row">
                <div class="col-md-8">
                    <label for="autor">Autor</label>
                    <?=
                    "";
                    if ($tipoUser == 1) {
                        ?>
                        <select class="form-control" id="autor" name="autor"> <!-- INCLUIR REGRA WHILE PARA IR ADICIONANDO AS OPÇÕES-->
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
                            ?>
                            <select class="form-control" id="autor" name="autor">
                                <option value="<?= $id ?>"><?= $linha['nome'] ?></option>
                                <?=
                                "";
                            }
                            ?>
                        </select> 
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <label for="corpo">Corpo</label>
                    <textarea id="descricao" class="form-control" name="corpo">
                    </textarea>   
                </div>                
            </div>   
            <div class="row">
                <div class="col-md-12">
                    <label for="arquivo">Arquivo</label>
                    <input type="file"  id="arquivo" name="arquivo" >    
                </div>                
            </div> 

            <br>
            <br>
            <a href="index.php?pag=4" class="btn btn-danger"> Cancelar e Voltar </a>
            <input type="submit"  class="btn btn-success" value="Cadastrar">

        </form>