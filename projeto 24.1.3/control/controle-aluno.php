<?php
require("../model/Aluno.Class.php");

if(isset($_POST['cadastro_aluno'])){
    $ano = $_POST['ano'];
    $turma = $_POST['turma'];
    $nome = $_POST['nome'];
    echo "ta setado";
    
    $aluno = new Aluno();
    $aluno->cadastrar_aluno($turma, $nome, $ano);
    // echo "ta setado";
}
?>