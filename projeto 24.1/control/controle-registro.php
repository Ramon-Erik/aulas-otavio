<?php
require_once('../model/Registro.Class.php');

if (isset($_POST['registro_turma'])) {
  $ano = $_POST['ano'];
  $turma = $_POST['turma'];

  session_start();
  $_SESSION['ano'] = $ano;
  $_SESSION['turma'] = $turma;

  header("location:../view/relatorios/relatorio-registro.php");
}

if (isset($_POST['prox'])) {
  $ano = $_POST['ano'];
  $turma = $_POST['turma'];

  session_start();
  $_SESSION['ano'] = $ano;
  $_SESSION['turma'] = $turma;

  header("location: ../view/registrar-atraso/nome-motivo.php");
}

if (isset($_POST['cadastro_atraso'])) {
  $id_aluno = $_POST['id_aluno'];
  $motivo = $_POST['motivo'];

  session_start();
  $_SESSION['id_aluno'] = $id_aluno;
  $_SESSION['motivo'] = $motivo;

  $registro = new Registro();
  $registro->cadastrar_registro($motivo, $id_aluno);
}
