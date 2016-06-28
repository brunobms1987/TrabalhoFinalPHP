<!--Página referente às notícias...-->
<?php
$conexao = conecta();
date_default_timezone_set('America/Sao_Paulo');
//INÍCIO - CRIAÇÃO DO DESTINO DOS UPLOADS
$destino = "img/noticias/";
$hoje = date('Y/m/d');

if (!file_exists($destino))
    mkdir($destino);

//FIM - CRIAÇÃO DO DESTINO DOS UPLOADS
//INÍCIO - SCRIPT DE UPLOAD

$fotoUp = false;
$nomenovo = null;

if (!empty($_FILES['arquivo']['name'])) {
    $arquivo = $_FILES['arquivo'];
    $nome = $_FILES['arquivo']['name'];
    $extensao = explode(".", $nome);
    $extensao = $extensao[count($extensao) - 1];
    $nomenovo = "Noticia de " . date("Y.m.d.H.i.s") . "." . $extensao;

    if (!move_uploaded_file($_FILES['arquivo']['tmp_name'], $destino . $nomenovo)) {
        $nomenovo = 'semfoto.png';
    }
}

//FIM - SCRIPT DE UPLOAD
//INÍCIO - SCRIPT DE INSERÇÃO NO BANCO
//SE A ACAO PASSADA POR GET( NOS FORMULÁRIOS ) FOR 1, É CADASTRO NOVO, SENÃO É EDIÇÃO
if ($_GET['acao'] == 1) {
    $query = "INSERT INTO noticia (titulo, noticia, idAutor, imagem, dataCadastro)  "
            . "VALUES ('{$_POST['titulo']}', '{$_POST['corpo']}', '{$_POST['autor']}','{$nomenovo}', '{$hoje}');";
} else {
    if ($nomenovo == null || $nomenovo == "")
        $nomenovo = $_POST['fotoantiga'];
    $query = "UPDATE noticia set titulo='{$_POST['titulo']}', noticia='{$_POST['corpo']}', idAutor={$_POST['autor']}, "
            . "imagem='{$nomenovo}' where id={$_POST['id']} ";
}

$resultado = insere($conexao, $query);

if ($resultado) {
    echo "Notícia cadastrada";
} else
    echo "Erro ao cadastrar";
?>
<br>
<br>
<a href = "index.php?pag=9" class = "btn btn-info"> Cancelar e Voltar </a>
<?=
//FIM - SCRIPT DE INSERÇÃO NO BANCO

desconecta($conexao);
?>