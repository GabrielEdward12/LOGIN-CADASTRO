<?php
// importando os dados do banco de dados
include 'config.php';
// pegar os dados via post
$nome = trim($_POST['nome']);
$perfil = trim($_POST['perfil']);
$email = trim($_POST['email']);
$senha = trim($_POST['senha']);
$confirmar = trim($_POST['confirmar']);

//primeira validação de dados no banco
if (empty($nome)) {
    echo "O campo nome é obrigatório!";
    echo "<br>";
    echo "<a href='cadastro.php'> Voltar </a>";
    exit;
}
//segunda validação do tamanho do nome
if ((strlen($nome)) < 3) {
    echo "O campo nome deve ter pelo menos 3 caracteres!";
    echo "<br>";
    echo "<a href='cadastro.php'> Voltar </a>";
    exit;

}
//validação do email
if (empty($email)) {
    echo "O campo email é obrigatório!";
    echo "<br>";
    echo "<a href='cadastro.php'> Voltar </a>";
    exit;
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "O campo email deve ser um email válido!";
    echo "<br>";
    echo "<a href='cadastro.php'> Voltar </a>";
    exit;
}

//validação se o enail já existe no banco de dados
$sql = "SELECT * FROM usuario WHERE email = '$email'";
//executando o sql
$resultado = $conexao->query($sql);
//verificando se existe algum registro
if ($resultado->num_rows > 0) {
    $usuario = $resultado->fetch_assoc();
    if ($resultado->num_rows > 0) {
        echo "O email já está cadastrado!";
        echo "<br>";
        echo "<a href='cadastro.php'> Voltar </a>";
        exit;
    }
}

//validação da senha
if (empty($senha)) {
    echo "O campo senha é obrigatório!";
    echo "<br>";
    echo "<a href='cadastro.php'> Voltar </a>";
    exit;
}
if ((strlen($senha)) < 3) {
    echo "O campo senha deve ter pelo menos 3 caracteres!";
    echo "<br>";
    echo "<a href='cadastro.php'> Voltar </a>";
    exit;
}
//validação da confirmação de senha
if ($senha != $confirmar) {
    echo "As senhas não são iguais!";
    echo "<br>";
    echo "<a href='cadastro.php'> Voltar </a>";
    exit;
}
if (empty($perfil)) {
    echo "O campo perfil é obrigatório!";
    echo "<br>";
    echo "<a href='cadastro.php'> Voltar </a>";
    exit;
}

//sql de inserção de dados no banco
$sql = "INSERT INTO usuario (nome, perfil, email, senha) VALUES ('$nome','$perfil', '$email', '$senha')";
if ($conexao->query($sql)) {
    echo "Cadastro realizado com sucesso!";
    echo "<br>";
    echo "<a href='cadastro.php'> Voltar </a>";

} else {
    echo "Erro ao cadastrar: " . $conexao->error;
}
?>