<?php
class Registro {
    public function cadastrar_registro($motivo, $aluno) {
     
            $pdo = new pdo("mysql:host=localhost; dbname=registro_atraso_ramon", "root", "");
            $consulta = "INSERT INTO registro VALUES (null,:motivo, curdate(),:id_aluno,:id_usuario)";

            $id_usuario = 1;

            $consulta_feita = $pdo->prepare($consulta);
            $consulta_feita->bindValue(":id_aluno", $aluno);
            $consulta_feita->bindValue(":id_usuario", $id_usuario);
            $consulta_feita->bindValue(":motivo", $motivo);
            $consulta_feita->execute();
}
}
?>
