<?php
require('../model/Registro.Class.php');

if (isset($_POST['prox'])) {
  $ano = $_POST['ano'];
  $turma = $_POST['turma'];
  echo $ano;
  echo $turma;
  // $registro = new Registro();
  //  $registro->cadastrar_registro($motivo, $aluno);
}
