<?php

require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $codigo = $_POST["codigo"];
    $nome = $_POST["nome"];
    $descricao = $_POST["des"];
    $estoque = $_POST["est"];
    $preco = $_POST["preco"];

    $conexao = mysqli_connect($servidor, $usuario, $senha, $banco);


    $Sql = "INSERT INTO sistema  (nome, descricao, estoque, preco ) VALUES ( '$nome', '$descricao', '$estoque' , '$preco' )";


    if ($conexao->query($Sql)) {

        echo "<div class = att>Cadastro realizado com sucesso!</div>";

    } else {
        echo "Erro ao cadastrar: " . $conexao->error;

    }


}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>

<body class="body">
    <header>
        <h1>Cadastro de Produtos</h1>
    </header>
    <br>
    <nav>
        <a href="index.php">Início</a>
        <a href="cadastro.php">Cadastro de Produtos</a>
        <a href="listar.php">Lista de Produtos</a>
    </nav>

    <div class="cadastro">
        <form action="" method="post">
            <label>Digite o nome: </label>
            <br>
            <input type="text" name="nome" required placeholder="Nome">
            <input type="hidden" name="codigo" required value="<?php echo $sistema['codigo'] ?>">
            <br><br>
            <label>Descrição: </label>
            <br>
            <input type="text" name="des" required placeholder="Descrição">
            <br><br>
            <label>Estoque: </label>
            <br>
            <input type="number" name="est" required placeholder="Estoque">
            <br><br>
            <label>Digite o preço: </label>
            <br>
            <input type="number" name="preco" required placeholder="Preço">
            <br><br>
            <label>Digite a quantidade: </label>
            <br>
            <input class="cadas" type="submit" name="cadastrar" value="Cadastrar">
        </form>
    </div>
    <footer>
        <h3>Desenvolvedores:</h3>
        <h3>Alice e Gabriel</h3>
        <h3>Email: mix@gmail.com | Número:(+55) 99999-9999</h3>
    </footer>
</body>
</html>