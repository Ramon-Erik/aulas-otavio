<?php

class Usuario {
    public function cadastrar_usuario($tipo, $senha, $email) {

        $pdo = new pdo("mysql:host=localhost; dbname=registro_atraso_ramon", "root", "");
        $consulta = "INSERT INTO `usuario` VALUES (null,':email', ':senha',':tipo')";

        $consulta_feita = $pdo->prepare($consulta);
        $consulta_feita->bindValue(":email", $email);
        $consulta_feita->bindValue(":senha", $senha);
        $consulta_feita->bindValue(":tipo", $tipo);
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

        header('location:../view/login.html');
    }
}
