<?php

include './conexao.php';
$conexao = conecta();

$id = $_GET['id'];
$destino = "./arquivos/imagens/";
if (!file_exists($destino))
    mkdir($destino, 755);

$extImagens = array("jpg", "png", "bmp", "gif");
if (isset($_FILES['arquivos'])) {
    for ($i = 0; $i < sizeof($_FILES['arquivos']); $i++) {
        if (!empty($_FILES['arquivos']['name'][$i])) {
            $nome = $_FILES['arquivos']['name'][$i];
            $extensao = explode('.', $nome);
            $extensao = $extensao[count($extensao) - 1];

            if (in_array($extensao, $extImagens))
                $destino = "./arquivos/imagens/";
            else
                echo "Formato inválido. Favor utilizar arquivos 'jpg', 'png', 'bmp' ou 'gif'";

            $nomenovo = $id . "." . $extensao;

            if (move_uploaded_file($_FILES['arquivos']['tmp_name'][$i], $destino . $nomenovo)) {
                echo "<br> Arquivo movido com sucesso. <br>";
                echo "Nome do arquivo: " . $nomenovo;
            } else
                echo "<br> Erro ao fazer upload.";
        }
    }
}
?>

