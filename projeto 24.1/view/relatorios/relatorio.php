<?php
require('../../model/Aluno.Class.php');
require('../../../LIB_FPDF/fpdf.php');

$pdf = new FPDF('P', 'pt', 'A4');
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 18);

$pdo = new pdo("mysql:host=localhost; dbname=registro_atraso_ramon", "root", "");
$consulta = "select * from aluno";
$consulta_feita = $pdo->prepare($consulta);
$consulta_feita->execute();

$pdf->Cell(20, 5, "Id", 1, 0, 'L');
// foreach ($consulta_feita as $value) {
//     $pdf->Cell(20, 5, "Id", 1, 0, 'L');
// }

// $pdf->Cell(0, 15,utf8_decode ("Você é linda"), 1, 1, 'I');
// $pdf->Output();
// $pdf->Output("nome-arquivo", "D"); -> força download
// $pdf->Output("nome-arquivo", "F"); -> pergunta
