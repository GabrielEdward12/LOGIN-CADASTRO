<?php
//abrindo a sessão 
session_start();
//verificando se o usuario está logado no sistema
if (!isset($_SESSION['usuario'])) {
    echo "Acesso negado! Voce não tem permissão
     para acessar esta página.";
    echo "<br>";
    echo " <a href='index.php'>Voltar</a>";
    exit;
}
if ($_SESSION['perfil'] != 'func') {
    echo "<p>Acesso negado! Você não tem permissão para acessar essa página.</p>";
    echo "<br>";
    echo "<a href='index.php'>Voltar</a>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página do Funcionário</title>
</head>

<body>
    <header>
        <h1>Nome da empresa e logotipo</h1>
        <br />
        <nav>
            <a href="cadastro.html">Início</a>
            <a href="listar3.php">Entrar</a>
        </nav>
    </header>



    <br>
    <a href="index.php">Voltar</a>

</body>

</html>