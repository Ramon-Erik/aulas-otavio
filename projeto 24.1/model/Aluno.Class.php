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

    public function listar_alunos($ano, $turma) {
        $pdo = new pdo("mysql:host=localhost; dbname=registro_atraso_ramon", "root", "");
        $consulta = "select * from aluno order by ano, turma;";
        $consulta_feita = $pdo->prepare($consulta);
        $consulta_feita->execute();

        foreach ($consulta_feita as $value) {
            echo '<option value=' . $value['id'] . '>' . $value['nome'] . '</option>';
        }
    }
}
