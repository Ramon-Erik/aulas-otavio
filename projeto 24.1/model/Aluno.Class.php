<?php

require_once("C:/xampp/htdocs/escola/aulas-otavio/LIB_FPDF/fpdf.php");

class Aluno {
    public function cadastrar_aluno($turma, $nome, $ano) {

        $pdo = new pdo("mysql:host=localhost; dbname=registro_atraso_ramon", "root", "");
        $consulta = "INSERT INTO aluno VALUES (null, :ano, :turma, :nome)";

        $consulta_feita = $pdo->prepare($consulta);
        $consulta_feita->bindValue(":nome", $nome);
        $consulta_feita->bindValue(":turma", $turma);
        $consulta_feita->bindValue(":ano", $ano);
        $consulta_feita->execute();
    }

    public function listar_alunos() {
        session_start();
        $ano = $_SESSION['ano'];
        $turma = $_SESSION['turma'];

        echo 'a', $ano, $turma;

        $pdo = new pdo("mysql:host=localhost; dbname=registro_atraso_ramon", "root", "");
        $consulta = "select * from aluno where ano=:ano and turma=:turma";
        $consulta_feita = $pdo->prepare($consulta);
        $consulta_feita->bindValue(":ano", $ano);
        $consulta_feita->bindValue(":turma", $turma);
        $consulta_feita->execute();

        foreach ($consulta_feita as $value) {
            echo '<option value=' . $value['id'] . '>' . $value['nome'] . '</option>';
        }
    }

    public function relatorio_atrasos_individual($id) {
        $pdo = new pdo("mysql:host=localhost; dbname=registro_atraso_ramon", "root", "");
        $consulta = "select aluno.nome, aluno.turma, aluno.ano, registro.motivo, registro.data, contato.endereco_email from aluno inner join usuario on aluno.id = usuario.id_aluno inner join registro on aluno.id = registro.id_aluno inner join contato on registro.id_usuario = contato.id_usuario where usuario.id = :id order by registro.data ASC;";

        $consulta_feita = $pdo->prepare($consulta);
        $consulta_feita->bindValue(":id", $id);
        $consulta_feita->execute();

        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFOnt('arial', 'B', 12);
        $pdf->Cell(0, 5, mb_convert_encoding("Relatório de atrasos de",'ISO-8859-1', 'UTF-8'), 0, 1, 'C');
        $pdf->SetFOnt('arial', '', 12);
        $x=0;
        foreach ($consulta_feita as  $value) {
            if ($x==0) {
                $pdf->Cell(0, 5, mb_convert_encoding($value['nome'],'ISO-8859-1', 'UTF-8'), 0, 1, 'C');
                $pdf->Cell(0, 5, mb_convert_encoding($value['ano'] . '° ' . $value['turma'],'ISO-8859-1', 'UTF-8'), 0, 1 , 'C');
                $pdf->Cell(15, 5, 'Motivo', 1, 0, 'C');
                $pdf->Cell(35, 5, 'Dia de atraso', 1, 0, 'C');
                $pdf->Cell(35, 5, mb_convert_encoding("Responsável",'ISO-8859-1', 'UTF-8'), 1, 1, 'C');
                $x++;
            } 
            $pdf->Cell(15, 5, mb_convert_encoding($value['motivo'],'ISO-8859-1', 'UTF-8'), 1, 0, 'C');
            $pdf->Cell(35, 5, mb_convert_encoding($value['data'],'ISO-8859-1', 'UTF-8'), 1, 0, 'C');
            $pdf->Cell(35, 5, mb_convert_encoding($value['endereco_email'],'ISO-8859-1', 'UTF-8'), 1, 1, 'C');
        }
        $pdf->Output();
    }
    
    public function get_dados_aluno($id) {
        $pdo = new pdo("mysql:host=localhost; dbname=registro_atraso_ramon", "root", "");
        $consulta = "select aluno.nome, aluno.turma, aluno.ano, aluno.id from aluno inner join usuario on aluno.id = usuario.id_aluno where usuario.id = :id;";
        $consulta_feita = $pdo->prepare($consulta);
        $consulta_feita->bindValue(":id", $id);
        $consulta_feita->execute();
        foreach ($consulta_feita as $value) {
            $nome = $value['nome'];
            $ano = $value['ano'];
            $turma = $value['turma'];
            $id = $value['id'];
            return [$id, $ano, $turma, $nome];
        }
    }
    
}
