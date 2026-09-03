<?php
include 'config.php';
$sql = "Select * from usuario";
//executando a consulta no meu banco de dados
$resultado = $conexao->query($sql);

echo $html = '';
if ($resultado->num_rows > 0) {
    $html.="<h1>Lista de Usuários</h1>";
    $html.="<table border = '1'>";
    $html.="<tr>";
    $html.="<th> Id </th>";
    $html.="<th> Nome </th>";
    $html.="<th> Email </th>";
    $html.="<th> Perfil </th>";
    $html.="</tr>";
    while ($linha = $resultado->fetch_assoc()) {
        $html.="<tr>";
        $html.="<td>" . $linha['id'] . "</td>";
        $html.="<td>" . $linha['nome'] . "</td>";
        $html.="<td>" . $linha['email'] . "</td>";
        $html.="<td>" . $linha['Perfil'] . "</td>";
        $html.="</tr>";
    }
    $html.="</table>";

} else {
    $html.="Sem resultado a ser consultado.";
}


//carregar a biblioteca
require_once 'dompdf-3.1.6/dompdf/vendor/autoload.php';
//instanciando o objeto DOMPDF
use Dompdf\Dompdf;
//declarando o objeto DOMPDF
$dompdf = new Dompdf();
//definindo o conteudo do PDF
$dompdf-> loadHtml($html);
//definido o tamanho do papel
$dompdf->setPaper('A4', 'portrait');
//gerando o PDF
$dompdf->render();
//limpar os arquivos temporarios gerados pelo Dompdf
ob_end_clean();
//exibir o pdf no navagador
$dompdf->stream("documento.pdf", array("Attachment" => true));

?>