<?php
require('../model/Registro.Class.php');

if(isset($_POST['cadastro_atraso'])){
    $aluno = $_POST['id_aluno'];
    $motivo = $_POST['motivo'];

    $registro = new Registro();
    $registro->cadastrar_registro($motivo, $aluno);
}
?>