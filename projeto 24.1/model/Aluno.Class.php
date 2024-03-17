<?php

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
    public function listar_aluno($id) {
        $pdo = new pdo("mysql:host=localhost; dbname=registro_atraso_ramon", "root", "");
        $consulta = "select * from aluno inner join usuario on aluno.id = usuario.id_aluno where usuario.id = :id;";
        $consulta_feita = $pdo->prepare($consulta);
        $consulta_feita->bindValue(":id", $id);
        $consulta_feita->execute();
        echo $id;

        echo '<div class="linha"><select name="id_aluno" disabled="disabled">';
        foreach ($consulta_feita as $value) {
            echo '<option value=' . $value['id'] . '>' . $value['ano'] . '</option>';
        }
        echo '</select></div>';
        
        echo '<div class="linha"><select name="id_aluno" disabled="disabled">';
        foreach ($consulta_feita as $value) {
            echo '<option value=' . $value['id'] . '>' . $value['nome'] . '</option>';
        }
        echo '</select></div>';
    }
    
    // public function 
}
