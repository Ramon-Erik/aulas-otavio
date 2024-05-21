<?php

require_once('../../../model/Aluno.Class.php');

session_start();

$registro = new Aluno();
$registro->relatorio_atrasos_individual($_SESSION['id_usuario']);