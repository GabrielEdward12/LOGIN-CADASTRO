<?php
//carregar a biblioteca
require_once 'dompdf-3.1.6/dompdf/vendor/autoload.php';
//instanciando o objeto DOMPDF
use Dompdf\Dompdf;
//declarando o objeto DOMPDF
$dompdf = new Dompdf();
//definindo o conteudo do PDF
$dompdf-> loadHtml('<h1>Eu odeio a Alice!</h1>');
//definido o tamanho do papel
$dompdf->setPaper('A4', 'portrait');
//gerando o PDF
$dompdf->render();
//limpar os arquivos temporarios gerados pelo Dompdf
ob_end_clean();
//exibir o pdf no navagador
$dompdf->stream("documento.pdf", array("Attachment" => false));
?>
