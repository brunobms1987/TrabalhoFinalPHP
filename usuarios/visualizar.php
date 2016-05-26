
<?php
if (!isset($_GET['id'])) {
    //caso não seja passado o id para buscar o usuário no banco, redireciona para a página de listagem.
    header("Location: index.php?pag=4");
}
$conexao = conecta();

//sou admistrador??

$resultado = busca($conexao, "SELECT * from usuario where id={$_GET['id']}");

//sou usuário comum??
// $resultado = busca($conexao, "SELECT * from usuario where id=$id");

$usuario = mysqli_fetch_array($resultado);
?> 

<div id="div_impressao">


    <div class="container-fluid">
        <div  class="container" >
            <div class="row">
                <div class="col-md-3">
                    <img src="./uploads/<?= $usuario['foto']; ?>" width="100px" height="100px">
                </div>
                <div class="col-md-9" >

                    <table class="table">
                        <tbody><tr  style="background-color:#6495ED;">
                                <th>Código</th>
                                <th>Nome</th>
                                <th>Email</th>                   
                                <th>Data de Nascimento</th>
                            </tr>

                            <tr>
                                <td><?= $usuario['id']; ?></td>
                                <td><?= $usuario['nome']; ?></td>
                                <td>
                                    <?= $usuario['email']; ?>
                                </td>

                                <td>
                                    <?= $usuario['dataNasc']; ?>

                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>   
            <div class="row">
                <div class="col-md-12">
                    <b> Descrição:</b>
                    <br>
                    <?= $usuario['descricao']; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <b>  Tipo do usuário:</b>  <?= $usuario['tipo'] == 1 ? "Adminsitrador" : "Autor"; ?>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <b> Usuário desde: </b>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <b> Total de notícias publicadas:</b>

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