<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    <form action ="listar.php">
        Registros: <select name="Registros" onload="<?= $regPagina ?>">
            <option value="5">5</option>
            <option value="10">10</option>
            <option value="20">20</option>
            <option value="50">50</option>
            <option value="100">100</option>
        </select>
        <input type="submit" value="Atualizar Lista">
        <?php 
        setcookie("registrosTela", $regPagina);
        ?>
    </form>
    <br>
</head>
<body>
    <?php
    if (isset($_COOKIE['registros'])) {
        $regPagina = $_COOKIE['Registros'];
    }
    echo $regPagina;

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
        echo $registro['id'] . " - " . $registro['nome'] . " - " . $registro['email'] . "<br>";
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
</body>
</html>