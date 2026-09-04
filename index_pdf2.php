<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    </header>
    <nav>
        <h1>Nome da Empresa e logotipo</h1>
        <a href="index_pdf2.php">Lista de Usuários</a>
        <a href="listar.php">Lista de Produtos</a>
        <a href="index_pdf.php">Relatório em PDF</a>
    </nav>
    </header>

    <?php
    include 'config.php';
    $sql = "Select * from usuario";
    //executando a consulta no meu banco de dados
    $resultado = $conexao->query($sql);

    echo $html = '';
    if ($resultado->num_rows > 0) {
        echo "<h1>Lista de Usuários</h1>";
        echo "<table border = '1'>";
        echo "<tr>";
        echo "<th> Id </th>";
        echo "<th> Nome </th>";
        echo "<th> Email </th>";
        echo "<th> Perfil </th>";
        echo "</tr>";
        while ($linha = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $linha['id'] . "</td>";
            echo "<td>" . $linha['nome'] . "</td>";
            echo "<td>" . $linha['email'] . "</td>";
            echo "<td>" . $linha['Perfil'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";

    } else {
        echo "Sem resultado a ser consultado.";
    }

    ?>
</body>

</html>