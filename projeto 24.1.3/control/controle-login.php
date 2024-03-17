<?php
if(isset($_GET['opc'])){
    $opc= $_GET['opc'];
    switch($opc){
        case 1:
        header('location:../view/login.php');
        break;

        case 2:

            require_once('../model/Usuario.Class.php');
            $email = $_GET['email'];
            $senha = $_GET['senha'];
            $usuario = new Usuario('','');
            $usuario->autenticar($email, $senha);
            // header('location:../view/login.php');
            break;
        case 3:
            header('location:../view/logado.php');
            
            break;
        case 4:
           header('location:../view/loginfail.php');
           
            break;
    }
}
?>