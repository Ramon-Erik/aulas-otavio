<?php
if(isset($_POST['cadastro_atraso'])){
    $ano = $_POST['ano'];
    $turma = $_POST['turma'];
    $aluno = $_POST['aluno'];
    $motivo = $_POST['motivo'];

    // $x = new Registro();
    echo $ano. '<br>';
    echo $turma. '<br>';
    echo $aluno. '<br>';
    echo $motivo. '<br>';
}
?>