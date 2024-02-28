<?php
require('../model/Registro.Class.php');

if (isset($_POST['prox'])) {
  $ano = $_POST['ano'];
  $turma = $_POST['turma'];
  // echo $ano;
  // echo $turma;

  session_start();
  $_SESSION['ano'] = $ano;
  $_SESSION['turma'] = $turma;
  echo $_SESSION['ano'];
  echo $_SESSION['turma'];

  // $registro = new Registro();
  //  $registro->cadastrar_registro($motivo, $aluno);
}
