<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="login.php" method="post">
        <label>Email:</label>
        <input type="email" name="email" required placeholder="Digite o seu email">
        <br><br>
        <label>Senha:</label>
        <input type="senha" name="senha" required placeholder="Digite a sua senha">
        <br><br>
        <input type="submit" value="Entrar">
        <a href="cadastro.php">Cadastre-se</a>
    </form>
</body>
</html>