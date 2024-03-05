<?php
require('../../model/Usuario.Class.php');
require('../../../LIB_FPDF/fpdf.php');

$pdf = new FPDF('P', 'pt', 'A4');
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 18);

session_start();
$_SESSION['pdf'] = $pdf;
$usuario = new Usuario('','');
$usuario->listar_usuarios_pdf();
// $pdf->Cell(0, 15,utf8_decode ("Você é linda"), 1, 1, 'I');
// $pdf->Output();
// $pdf->Output("nome-arquivo", "D"); -> força download
// $pdf->Output("nome-arquivo", "F"); -> pergunta
