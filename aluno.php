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
if ($_SESSION['perfil'] != 'cliente') {
    echo "<p>Acesso negado! Você não tem permissão para acessar essa página.</p>";
    echo "<br>";
    echo "<a href='index.php'>Voltar.</a>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página do cliente</title>
</head>

<body>
    <header>
        <h1>Nome da empresa e logotipo</h1>
        <nav>
            <a href="painel.php">Perfil</a>
            <a href="listar2.php">Lista de Produtos</a>
        </nav>
    </header>
    <h1>Bem-vindo, Cliente!</h1>
    <p>Você tem acesso total a esta página.</p>
    <p><?php echo "Seu perfil é: " . $_SESSION['perfil']; ?></p>
    <br>
    <a href="index.php">Voltar</a>

</body>

</html>