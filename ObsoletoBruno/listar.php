<html>
    <head>
        <meta charset="UTF-8">
        <title>Usuários - Selectus Web System</title>
        <link rel="stylesheet" href="arquivos/css/bootstrap.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="arquivos/js/bootstrap.min.js"></script>
    <br>
</head>
<body>
    <?php
    require './verifica_logado.php';
    include './menu.php';
    setcookie("registros", 20, time() + 10 * 60);
    if (isset($_COOKIE['registros'])) {
        $regPagina = $_COOKIE['registros'];
    }

//BUSCAR O TOTAL DE PESQUISAS
    include 'conexao.php';
    $conexao = conecta();
    $query = "select * from usuarios";
    $resultado = buscar($conexao, $query);
    $total = mysqli_num_rows($resultado);

    //CALCULAR O NÚMERO DE PÁGINAS
    $qtd = 5;
    $paginas = ceil($total / $qtd);

    //BUSCA LIMITADA
    $pagAtual = isset($_GET['pag']) ? $_GET['pag'] : 1;
    $inicio = ($qtd * $pagAtual) - $qtd;
    $query = "select * from usuarios limit $inicio,$qtd;";
    $resultado = buscar($conexao, $query);

    //EXIBIR O RESULTADO
    while ($registro = mysqli_fetch_array($resultado)) {
        echo "<a href='editar.php?id={$registro['id']}'> Editar</a> ";
        echo "<a href='excluir.php?id={$registro['id']}'> Excluir</a> ";
        echo $registro['id'] . " - " . $registro['usuarios_nome'] . " - " . $registro['usuarios_email'] . "<br>";
    }
    desconecta($conexao);
    //LINKS DE PAGINAÇÃO
    $i = 1;
    echo "<a href=\"listar.php?pag=1\">
                Primeira
                   </a>";

    $anterior = $pagAtual - 1;
    if ($anterior < 1) {
        $anterior = 1;
    }
    echo "| <a href=\"listar.php?pag=$anterior\">
                | Anterior
                   </a>";

    while ($i <= $paginas) {
        echo "| <a href=\"listar.php?pag=$i\">
                Pág $i 
                   </a>";
        $i++;
    }
    $proxima = $pagAtual + 1;
    if ($proxima > $paginas) {
        $proxima = $paginas;
    }
    echo "| <a href=\"listar.php?pag=$proxima\">
                Próxima
                   </a>";

    echo "| <a href=\"listar.php?pag=$paginas\">
                Última
                   </a>";
    ?>
    <br><br>
    <a href="cadastrar.php">Cadastrar Usuário</a><br>
</body>
</html>