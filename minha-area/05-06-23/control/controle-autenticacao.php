<?php

if (isset($_POST['btn-autenticacao'])) {
    require '../banco.php';
    require '../model/Usuario.Class.php';

    $num_conta = $_POST['numConta'];
    $senha = $_POST['senha'];
    
    $user = new Usuario($num_conta, $senha);
    $user->autenticar($num_conta, $senha);
}
