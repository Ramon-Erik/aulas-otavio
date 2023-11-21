<?php

if (isset($_POST['btn-autenticacao'])) {
    require 'banco.php';
    $num_conta = $_POST['numConta'];
    $senha = $_POST['senha'];

    foreach ($clientes as $cliente) {
        echo $num_conta == $cliente['conta'] . "<br>";
        echo $senha == $cliente['senha'] . "<br>";
        if ($num_conta == $cliente['conta'] & $senha == $cliente['senha']) {
            session_start();
            $_SESSION['conta'] = $num_conta;
            echo 'entrou na conta, vai redirecionar';
            header('location:view/menu.php');
        } else {
            echo "<h1 style=\"text-align: center;\">Conta ou senha invalidas!<h1>";
        }
    }
}
