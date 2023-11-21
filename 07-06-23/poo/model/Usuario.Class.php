<?php
class Usuario {
    public $conta, $senha;

    public function __construct($conta, $senha) {
        $this->conta = $conta;
        $this->senha = $senha;
    }

    public function autenticar($conta, $senha) {
        require ('../banco.php');
        foreach ($clientes as $i => $cliente) {
            if ($conta == $cliente['conta'] & $senha == $cliente['senha']) {
                session_start();
                $_SESSION['cliente'] = $cliente['cliente'];
                $_SESSION['conta'] = $cliente['conta'];
                $_SESSION['saldo'] = $cliente['saldo'];
                $_SESSION['senha'] = $senha;
                header('location:../control/controle-autenticacao.php?retorna=1');
            } elseif($i == 2) {
                echo "<h1 style=\"text-align: center;\">Conta ou senha invalidas!<h1>";
            }
        }
    }

    public function saldo($conta){
        require ('../banco.php');
        foreach ($clientes as $cli) {
            if ($cli['conta'] == $_SESSION['conta']) {
                header('location:../view/banco/saldo.php');
            }
        }
    }
}
