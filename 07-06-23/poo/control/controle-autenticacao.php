<?php

session_start();
if (isset($_POST['btn-autenticacao'])) {
    require '../banco.php';
    require '../model/Usuario.Class.php';

    $num_conta = $_POST['numConta'];
    $senha = $_POST['senha'];
    
    $user = new Usuario($num_conta, $senha);
    $user->autenticar($num_conta, $senha);
}

if (isset($_GET['retorna'])) {
    $ret = $_GET['retorna'];
    switch ($ret) {
        case 1: // autenticou direito
            header('location:../view/menu.php');
            break;
        
        case 2: // autenticacao deu erro
            header('location:../view/erro-autenticacao.php');
            break;
        
        default:
            # code...
            break;
    }
}