<?php

class Aluno {
    public function cadastrar_aluno($turma, $nome, $ano) {

        $pdo = new pdo("mysql:host=localhost; dbname=registro_atraso_ramon", "root", "");
        $consulta = "INSERT INTO aluno VALUES (null,:turma, :nome, :ano)";

        $consulta_feita = $pdo->prepare($consulta);
        $consulta_feita->bindValue(":nome", $nome);
        $consulta_feita->bindValue(":turma", $turma);
        $consulta_feita->bindValue(":ano", $ano);
        $consulta_feita->execute();
    }

    public function listar_alunos() {
        // session_start();
        $ano = $_SESSION['ano'];
        $turma = $_SESSION['turma'];

        echo  'ano', $_SESSION['ano'], 'turma', $_SESSION['turma'];
        echo  'ano', $ano, 'turma', $turma;

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
    
    // public function 
}
