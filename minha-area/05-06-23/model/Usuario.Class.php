<?php
class Usuario {
    public $conta, $senha;

    public function __construct($conta, $senha) {
        $this->conta = $conta;
        $this->senha = $senha;
    }

    public function autenticar($conta, $senha) {
        require('../banco.php');
        foreach ($clientes as $i => $cliente) {
            if ($conta == $cliente['conta'] & $senha == $cliente['senha']) {
                session_start();
                $_SESSION['conta'] = $cliente['cliente'];
                header('location:../view/menu.php');
            } elseif ($i == 2) {
                header('location:../view/alertas/erro.html');
            }
        }
    }
}
