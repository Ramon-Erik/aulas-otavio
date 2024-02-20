<?php
if(isset($_POST['cadastro_usuario'])){
    $tipo = $_POST['tipo'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // $x = new Registro();
    echo $tipo. '<br>';
    echo $senha. '<br>';
    echo $email. '<br>';
}
?>