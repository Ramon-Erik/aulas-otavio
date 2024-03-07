<?php
class Registro
{
    public function cadastrar_registro($motivo, $aluno)
    {

        $pdo = new pdo("mysql:host=localhost; dbname=registro_atraso_ramon", "root", "");
        $consulta = "INSERT INTO registro VALUES (null,:motivo, curdate(),:id_aluno,:id_usuario)";

        $id_usuario = 1;

        $consulta_feita = $pdo->prepare($consulta);
        $consulta_feita->bindValue(":id_aluno", $aluno);
        $consulta_feita->bindValue(":id_usuario", $id_usuario);
        $consulta_feita->bindValue(":motivo", $motivo);
        $consulta_feita->execute();

        header("location: ../view/cadastrar-registro-1.php");
    }

    public function relatorio_turma()
    {
        require('../../../LIB_FPDF/fpdf.php');

        session_start();
        $ano = $_SESSION['ano'];
        $turma = $_SESSION['turma'];

        $pdf = new FPDF();

        $pdf->AddPage();
        $pdf->SetFOnt('arial', 'B', 12);

        $pdf->Cell(0, 5, utf8_decode("Relatório de registros da turma $ano") . utf8_decode("° $turma"), 0, 1, 'C');

        $pdo = new pdo("mysql:host=localhost; dbname=registro_atraso_ramon", "root", "");
        $consulta = "select * from registro inner join aluno on registro.id_aluno = aluno.id where ano = :ano and turma = :turma";
        $consulta_feita = $pdo->prepare($consulta);
        $consulta_feita->bindValue(":ano", $ano);
        $consulta_feita->bindValue(":turma", $turma);
        $consulta_feita->execute();

        $pdf->Cell(25, 5, 'motivo', 1, 0, 'C');
        $pdf->Cell(120, 5, 'nome', 1, 0, 'L');
        $pdf->Cell(40, 5, 'data', 1, 1, 'C');

        $pdf->SetFOnt('arial', '', 12);

        foreach ($consulta_feita as $reg) {
            $pdf->Cell(25, 5, $reg['motivo'], 1, 0, 'C');
            $pdf->Cell(120, 5, $reg['nome'], 1, 0, 'L');
            $pdf->Cell(40, 5, $reg['data'], 1, 1, 'C');
        }

        $pdf->Output();
    }
}
