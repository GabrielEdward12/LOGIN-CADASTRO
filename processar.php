<?php
// importando os dados do banco de dados
include 'config.php';
// pegar os dados via post
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
//sql de inserção de dados no banco
$sql = "INSERT INTO usuario (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
if ($conexao->query($sql)) {
    echo "Conexão realizada com sucesso!";

}else{
    echo "Erro ao cadastrar: ". $conexao->error;
}
?>