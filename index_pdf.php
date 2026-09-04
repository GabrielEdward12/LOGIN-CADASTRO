<?php
include 'config.php';
$sql = "Select * from usuario";
//executando a consulta no meu banco de dados
$resultado = $conexao->query($sql);

echo $usu = '';
if ($resultado->num_rows > 0) {
    $usu.="<h1>Lista de Usuários</h1>";
    $usu.="<table border = '1'>";
    $usu.="<tr>";
    $usu.="<th> Id </th>";
    $usu.="<th> Nome </th>";
    $usu.="<th> Email </th>";
    $usu.="<th> Perfil </th>";
    $usu.="</tr>";
    while ($linha = $resultado->fetch_assoc()) {
        $usu.="<tr>";
        $usu.="<td>" . $linha['id'] . "</td>";
        $usu.="<td>" . $linha['nome'] . "</td>";
        $usu.="<td>" . $linha['email'] . "</td>";
        $usu.="<td>" . $linha['Perfil'] . "</td>";
        $usu.="</tr>";
    }
    $usu.="</table>";

} else {
    $usu.="Sem resultado a ser consultado.";
}
$sql = "Select * from sistema";
//executando a consulta no meu banco de dados
$resultado = $conexao->query($sql);


echo $html = '';
if ($resultado->num_rows > 0) {
    $html.="<h1>Lista de Produtos</h1>";
    $html.="<table border = '1'>";
    $html.="<tr>";
    $html.="<th> Código </th>";
    $html.="<th> Nome </th>";
    $html.="<th> Descrição </th>";
    $html.="<th> Preço </th>";
    $html.="<th> Estoque </th>";
    $html.="</tr>";
    while ($linha = $resultado->fetch_assoc()) {
        $html.=  "<tr>";
        $html.="<td>" . $linha['codigo'] . "</td>";
        $html.="<td>" . $linha['nome'] . "</td>";
        $html.="<td>" . $linha['descricao'] . "</td>";
        $html.="<td>" . $linha['preco'] . "</td>";
        $html.="<td>" . $linha['estoque'] . "</td>";
        $html.="</tr>";
    }
    $html.= "</table>";

} else {
    $html.= "Sem resultado a ser consultado.";
}


//carregar a biblioteca
require_once 'dompdf-3.1.6/dompdf/vendor/autoload.php';
//instanciando o objeto DOMPDF
use Dompdf\Dompdf;
//declarando o objeto DOMPDF
$dompdf = new Dompdf();
//definindo o conteudo do PDF
$dompdf-> loadHtml($usu . $html);
//definido o tamanho do papel
$dompdf->setPaper('A4', 'portrait');
//gerando o PDF
$dompdf->render();
//limpar os arquivos temporarios gerados pelo Dompdf
ob_end_clean();
//exibir o pdf no navagador
$dompdf->stream("documento.pdf", array("Attachment" => false));

?>