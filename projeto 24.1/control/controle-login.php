<?php 
require('../model/Usuario.Class.php');
if (isset($_POST['logar'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $user = new Usuario('',''); // ta com esses dois valores pois em alguns editores diz que tem que ter dois parametros, mas a classe não tem construct
    $user->login($email, $senha);
}
?>