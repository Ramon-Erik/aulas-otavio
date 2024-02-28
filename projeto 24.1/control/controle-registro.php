<?php
require('../model/Registro.Class.php');

if (isset($_POST['prox'])) {
  $ano = $_POST['ano'];
  $turma = $_POST['turma'];

  session_start();
  $_SESSION['ano'] = $ano;
  $_SESSION['turma'] = $turma;

  // $registro = new Registro();
  //  $registro->cadastrar_registro($motivo, $aluno);
}
