<?php
//iniciar a sessão
session_start();
//verificando se o usuário está logado
if (!isset($_SESSION['usuario'])) {
    echo "Acesso negado! Voce não tem permissão
     para acessar esta página.";
    echo "<br>";
    echo " <a href='index.php'>Voltar</a>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso restrito</title>
</head>

<body>
    <h1>Acesso restrito</h1>
    <br>
    <h2>Bem-vindo, <?php echo $_SESSION['usuario']; ?>!</h2>
    <p>Seu email, <?php echo $_SESSION['email']; ?>!</p>
    <p>Seu perfil, <?php echo $_SESSION['perfil']; ?>!</p>
    <?php
    //verificando o perfil de adm
    if ($_SESSION['perfil'] == 'admin') {
        echo "<p>Você tem privilégios de administrador.</p>";
        echo "<p>Você pode gerenciar o sistema.";
        echo "<a href='admin.php'>Acessar a área de administração.</a>";
    }
    //verificando o perfil de professor
    if ($_SESSION['perfil'] == 'prof') {
        echo "<p>Você tem privilégios de professor.</p>";
        echo "<p>Você pode gerenciar o sistema.";
        echo "<a href='professor.php'>Acessar a área de Aluno.</a>";
    }
    //verificando o perfil de aluno
    if ($_SESSION['perfil'] == 'aluno') {
        echo "<p>Você tem privilégios de Aluno.</p>";
        echo "<p>Você pode gerenciar o sistema.";
        echo "<a href='aluno.php'>Acessar a área de Aluno.</a>";
    }


    ?>
    <a href="logout.php">Sair</a>
</body>

</html>