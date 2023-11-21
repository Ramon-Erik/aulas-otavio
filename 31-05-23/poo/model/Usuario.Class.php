<?php
class Usuario {
    public $conta, $senha;

    public function __construct($conta, $senha) {
        $this->conta = $conta;
        $this->senha = $senha;
    }

    public function autenticar($conta, $senha) {
        require('../banco.php');
        foreach ($clientes as $cliente) {
            if ($conta == $cliente['conta'] & $senha == $cliente['senha']) {
                session_start();
                $_SESSION['conta'] = $cliente['cliente'];
                header('location:../view/menu.php');
            } else {
                echo "<h1 style=\"text-align: center;\">Conta ou senha invalidas!<h1>";
            }
        }
    }
}
