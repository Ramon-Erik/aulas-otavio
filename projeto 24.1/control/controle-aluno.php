<?php
if(isset($_POST['cadastro_aluno'])){
    $ano = $_POST['ano'];
    $turma = $_POST['turma'];
    $nome = $_POST['nome'];

    // $x = new Registro();
    echo $ano. '<br>';
    echo $turma. '<br>';
    echo $nome. '<br>';
}
?>