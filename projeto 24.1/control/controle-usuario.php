<?php
require_once("../model/Usuario.Class.php");
if (isset($_POST['cadastro_usuario'])) {
    $tipo = $_POST['tipo'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $usuario = new Usuario('', '');
    $usuario->cadastrar_usuario($tipo, $senha, $email);
}
