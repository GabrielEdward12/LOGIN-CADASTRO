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
        <input type="text" name="nome" placeholder="Digite o seu nome">
        <br><br>
        <label>Email:</label>
        <input type="email" name="email" placeholder="Digite o seu email">
        <br><br>
        <label>Senha:</label>
        <input type="password" name="senha" placeholder="Digite a sua senha">
        <br><br>
        <label>Confirmar senha:</label>
        <input type="password" name="confirmar" placeholder="Digite a sua senha">
        <br><br>
        <label>Perfil:</label>
        <select name="perfil">
            <option value="">Escolha um perfil</option>
            <option value="admin">Administrador</option>
            <option value="func">Funcionário</option>
            <option value="cliente">Cliente</option>
        </select>
        <br><br>
        <input type="submit" value="Entrar">
    </form>

</body>

</html>