<?php
class Registro {
    public function cadastrar_registro($motivo, $aluno) {
        $pdo = new pdo("mysql:host=localhost; dbname=registro_atraso_ramon", "root", "");
        $consulta = "INSERT INTO registro VALUES (null,:motivo, curdate(),:id_aluno,:id_usuario)";

        session_start();

        $consulta_feita = $pdo->prepare($consulta);
        $consulta_feita->bindValue(":id_aluno", $aluno);
        $consulta_feita->bindValue(":id_usuario", $_SESSION['id_usuario']);
        $consulta_feita->bindValue(":motivo", $motivo);
        $consulta_feita->execute();

        header("location: ../view/cadastrar-registro-1.php");
    }

    public function relatorio_turma() {
        require('../../../LIB_FPDF/fpdf.php');

        session_start();

        $pdf = new FPDF();

        $pdf->AddPage();
        $pdf->SetFOnt('arial', 'B', 12);

        $pdf->Cell(0, 5, utf8_decode("Relatório de registros da turma") . utf8_decode("° "), 0, 1, 'C');

        $pdo = new pdo("mysql:host=localhost; dbname=registro_atraso_ramon", "root", "");
        $consulta = "select * from registro inner join aluno on registro.id_aluno = aluno.id ";
        $consulta_feita = $pdo->prepare($consulta);
        $consulta_feita->execute();

        $pdf->Cell(80, 5, 'nome', 1, 0, 'L');
        $pdf->Cell(25, 5, 'ano', 1, 0, 'L');
        $pdf->Cell(25, 5, 'turma', 1, 0, 'C');
        $pdf->Cell(25, 5, 'data', 1, 0, 'C');
        $pdf->Cell(25, 5, 'motivo', 1, 1, 'C');
        $pdf->SetFont('arial', '', 12);

        foreach ($consulta_feita as $reg) {
            $pdf->Cell(80, 5, utf8_decode($reg['nome']), 1, 0, 'L');
            $pdf->Cell(25, 5, utf8_decode($reg['ano']), 1, 0, 'L');
            $pdf->Cell(25, 5, utf8_decode($reg['turma']), 1, 0, 'C');
            $pdf->Cell(25, 5, utf8_decode($reg['data']), 1, 0, 'C');
            $pdf->Cell(25, 5, utf8_decode($reg['motivo']), 1, 1, 'C');
            $pdf->SetFont('arial', '', 12);
        }

        $pdf->Output();
    }
}
