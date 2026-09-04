<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "login-31-08";


$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);


if ($conexao->connect_error) {
    echo "Erro na conexão" . $conexao->connect_error;
}

?>
<?php

require_once 'config.php';




$sql = "Select * from sistema";


$resultado = $conexao->query($sql);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>

</head>

<body class="body">

    <header>
        <h1>Lista de Produtos </h1>
    </header>
    <br>
    <nav>
        <a href="cadastro2.php">Cadastro de Produtos</a>
        <a href="listar.php">Lista de Produtos</a>
    </nav>
    </header>
    <br><br>
    <section>

        <table border="1">
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Estoque</th>
            </tr>

            <?php
            while ($linha = $resultado->fetch_assoc()) {
                echo "<tr>";

                echo "<td>" . $linha['nome'] . "</td>";
                echo "<td>" . $linha['descricao'] . "</td>";
                echo "<td>" . $linha['preco'] . "</td>";
                echo "<td>" . $linha['estoque'] . "</td>";

                echo "</tr>";
            }
            ?>
        </table>
    </section>
    <footer class="foot2">
        <h3>Desenvolvedor:</h3>
        <h3>Gabriel</h3>
        <h3>Email: mix@gmail.com | Número:(+55) 99999-9999</h3>
    </footer>


</body>

</html>