<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Usuário</title>
</head>

<body>
    <h1>Cadastrar</h1>
    <form action="processar.php" method="post">
        <label>Nome:</label>
        <input type="text" name="nome" required placeholder="Digite o seu nome">
        <br><br>
        <label>Email:</label>
        <input type="email" name="email" required placeholder="Digite o seu email">
        <br><br>
        <label>Senha:</label>
        <input type="password" name="senha" required placeholder="Digite a sua senha">
        <br><br>
        <input type="submit" value="Entrar">
    </form>

</body>

</html>