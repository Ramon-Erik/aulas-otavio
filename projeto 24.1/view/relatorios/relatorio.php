<?php
require('../../model/Aluno.Class.php');
require('../../../LIB_FPDF/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('arial', 'B', 12);

$pdo = new pdo("mysql:host=localhost; dbname=registro_atraso_ramon", "root", "");
$consulta = "select * from aluno";
$consulta_feita = $pdo->prepare($consulta);
$consulta_feita->execute();

$pdf->Image('imgs/html.png', 10, 0, 20, 0, 'PNG');
$pdf->Cell(0,10,"                                  EEEP Salaberga Torquato Gomes de Matos", 0, 1, "L");
$pdf->Cell(0, 10, "                                         EMI em informatica", 0, 1, "L");
$pdf->Ln(10);
$pdf->Cell(0, 5, utf8_decode ("Relatório de Alunos"), 0, 0, "C");
$pdf->Ln(8);


$pdf->Cell(20, 5, 'Id', 1, 0, 'L');
$pdf->Cell(170, 5, 'Nome', 1, 1, 'L');

$pdf->SetFont('arial', '', 12);

foreach ($consulta_feita as $value) {
    $pdf->Cell(20, 5, $value['id'], 1, 0, 'C');
    $pdf->Cell(170, 5, $value['nome'], 1, 1, 'L');
}

$pdf->Output();


// $pdf->Cell(0, 15,utf8_decode ("Você é linda"), 1, 1, 'I');
// $pdf->Output("nome-arquivo", "D"); -> força download
// $pdf->Output("nome-arquivo", "F"); -> pergunta
