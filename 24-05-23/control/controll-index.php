<?php

if (isset($_POST['index'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    require '../model/Usuario.Class.php';
    $usuario = new Usuario($email, $senha);
    $usuario->autenticar($email, $senha);
}

if (isset($_POST[''])) {
    # code...
}