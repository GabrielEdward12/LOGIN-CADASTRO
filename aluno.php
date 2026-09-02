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
  if ($_SESSION['perfil'] != 'aluno') {
        echo "<p>Acesso negado! Você não tem permissão para acessar essa página.</p>";
        echo "<br>";
        echo "<a href='index.php'>Voltar.</a>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aluno page</title>
</head>
<body>
    <h1>Bem-vindo, Aluno!</h1>
    <p>Você tem acesso total a esta página.</p>
    <p><?php echo "Seu perfil é: " . $_SESSION['perfil']; ?></p>
    <br>
    <a href="index.php">Voltar</a>
    
</body>
</html>