<?php
//iniciar a sessão
session_start();
//verificando se o usuário está logado
if (!isset($_SESSION['usuario'])) {
    echo "Acesso negado! Você não tem permissão para acessar essa página.<br>";
    echo "<a href = 'index.php'>Voltar</a>";

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>
<body>
    <h1>Acesso restrito</h1>
    <br>
    <h2>Bem-Vindo, <?php echo $_SESSION['usuario']; ?>!</h2>
    <p>Seu email, ,<?php echo $_SESSION['email']; ?>!</p>
    <a href="logout.php">Sair</a>
</body>
</html>