<?php

$nome = "";
if (isset($_SESSION['nomeLogado'])) {
    
} else {
    session_start();
}

if (!isset($_SESSION['nomeLogado']) and ! isset($_SESSION['senhaLogado'])) {
    session_destroy();
    header("Location:login.php?erro=1");
} else {
    $nome = $_SESSION['nomeLogado'];
}
?>