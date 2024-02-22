<?php

require("../../model/Usuario.Class.php");

$alunos = new Usuario();

$alunos->listar_usuarios();

?>