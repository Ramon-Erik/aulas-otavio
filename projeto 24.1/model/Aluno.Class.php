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

        // $id_ultimo_func = $pdo->prepare("SELECT id FROM usuarios ORDER BY id DESC LIMIT 1");
        // $id_ultimo_func->execute();
        // $id_func = $id_ultimo_func->fetch(PDO::FETCH_ASSOC);

        // $consulta = "insert into contatos values(null, :valor ,:tipo, :id_usuario)";
        // $consultar = $pdo->prepare($consulta);
        // $consultar->bindValue(":tipo", $tipoContato);
        // $consultar->bindValue(":valor", $valorContato);
        // $consultar->bindValue(":id_usuario", $id_func['id']);
        // $consultar->execute();

        // $consulta = "insert into enderecos values(null, :rua, :numero, :cidade, :bairro, :uf, :id_usuario)";
        // $consultar = $pdo->prepare($consulta);
        // $consultar->bindValue(":rua", $rua);
        // $consultar->bindValue(":numero", $num);
        // $consultar->bindValue(":cidade", $cidade);
        // $consultar->bindValue(":bairro", $bairro);
        // $consultar->bindValue(":uf", $uf);
        // $consultar->bindValue(":id_usuario", $id_func['id']);
        // $consultar->execute();

        // header('location:../view/login.html');
    }

    public function listar_alunos($turma, $nome, $ano) {

        $pdo = new pdo("mysql:host=localhost; dbname=registro_atraso_ramon", "root", "");
        $consulta = "select * from aluno order by ano, turma;";
        $consulta_feita = $pdo->prepare($consulta);

        $consulta_feita->execute();
        foreach ($consulta_feita as $value) {
            echo $value['nome'] . '<br';
            echo $value['ano'] . '<br';
            echo $value['turma'] . '<br';
        }
    }
}
