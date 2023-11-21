<?php
require_once("../model/Usuario.class.php");

if (isset($_POST['btn'])) {
    $id = $_POST['id'];
    $x = new Usuario();
    switch ($id) {

        //cadastro usuario
        case '1':
            $email = $_POST['email'];
            $senha = $_POST['senha'];

        
          $x->cadastrarUsuario($email, $senha);

            break;

        //relatorio de Usuario
        case '2':
            $x->relatorio();
            break;
        //Recuperar senha
        case '3':
        $email = $_POST['email'];
        $x->recSenha($email);
            break;

        //Autenticar
        case '4':
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $x->autenticar($email, $senha);
            break;
        
        default:
            # code...
            break;
    }
}