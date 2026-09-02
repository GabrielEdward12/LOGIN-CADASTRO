<?php
//incluindo a configuração do banco de dados
include 'config.php';
//iniciando a sessão
session_start();
//pegando os dados do formulário
$email = $_POST['email'];
$senha = $_POST['senha'];
$sql = "SELECT * FROM usuario WHERE email = '$email'";
//executando a consulta
$resultado = $conexao->query($sql);
if ($resultado->num_rows > 0) {
    $usuario = $resultado->fetch_assoc();
    if ($senha == $usuario["senha"]) {
        $_SESSION["usuario"] = $usuario["nome"];
        $_SESSION["email"] = $usuario["email"];
        $_SESSION["perfil"] = $usuario["Perfil"];

        header("Location: painel.php");
        exit;
        echo "Login realizado com sucesso!";
    } else {
        echo "Senha incorreta!";
    }

} else {
    echo "Usuário não encontrado!";
}
?>