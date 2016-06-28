<!--Página geral...-->
<?php
$pagina = isset($_GET['pag']) ? $_GET['pag'] : 1;
switch ($pagina) {
    case 2:
        $url = "noticias.php";
        break;
    case 3:
        $url = "relatorios.php";
        break;
    case 4:
        $url = "/usuarios/listar.php";
        break;
    case 5:
        $url = "/usuarios/cadastrar.php";
        break;
    case 6:
        $url = "/usuarios/salvar.php";
        break;
    case 7:
        $url = "/usuarios/visualizar.php";
        break;
    case 8:
        $url = "/usuarios/editar.php";
        break;
    case 9:
        $url = "/noticias/listar.php";
        break;
    case 10:
        $url = "/noticias/cadastrar.php";
        break;
    case 11:
        $url = "/noticias/salvar.php";
        break;
    case 12:
        $url = "/noticias/visualizar.php";
        break;
    case 13:
        $url = "/noticias/editar.php";
        break;
    default :
        $url = "home.php";
}
?>