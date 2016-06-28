<!--Página referente às notícias...-->
<?php
if (!isset($_GET['id'])) {
    //caso não seja passado o id para buscar o usuário no banco, redireciona para a página de listagem.
    header("Location: index.php?pag=9");
}
$conexao = conecta();
$resultado = busca($conexao, "SELECT * from noticia where id={$_GET['id']}");
$noticia = mysqli_fetch_array($resultado);
$result_user = busca($conexao, "SELECT * from usuario where id={$noticia['idAutor']}");
$usuario = mysqli_fetch_array($result_user);
?> 
<div id="div_impressao">
    <div class="container-fluid">
        <div  class="container" >
            <div class="row">
                <div class="col-md-12" >
                    <table class="table">
                        <tbody><tr  style="background-color:#6495ED;">
                                <th>Número</th>
                                <th>Título</th>
                                <th>Data da Notícia</th>
                                <th>Nome do Autor</th>
                            </tr>

                            <tr>
                                <td><?= $noticia['id']; ?></td>
                                <td><?= $noticia['titulo']; ?></td>
                                <td><?= date('d/m/Y', strtotime($noticia['dataCadastro'])); ?></td>
                                <td><?= $usuario['nome']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td><?= $noticia['noticia']; ?></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="col-md-3">
                                        <img src="img/noticias/<?= $noticia['imagem']; ?>" width="200px" height="200px">
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>   
            <div class="row" style="margin-top: 10px">
                <div class="col-md-12">
                    <button id="imprimir" onclick="imprimir()" class="btn btn-danger"> Imprimir </button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function imprimir(divName) {
        var divImpressao = document.getElementById('div_impressao');
        var janela = window.open('', '_blank', 'width=500px');
        janela.document.open();
        janela.document.write('<html><body onload="window.print()">' + divImpressao.innerHTML + '</html>');
        janela.document.close();

    }
</script>