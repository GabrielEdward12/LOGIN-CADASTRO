<?php
//configuração do banco e dados
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "login-31-08";

$conexao = new mysqli($servidor, $usuario, $senha, $banco);

if ($conexao -> connect_error){
    echo "Conexão falhou:". $conexao->connect_error;  

}else{
    echo ("Conexão realizada com sucesso!");
}
?>