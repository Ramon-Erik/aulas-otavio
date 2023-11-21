<?php
    if (isset($_POST['opc'])) {
        $res = $_POST['opc'];
        require '../banco.php';
        session_start();
        // echo "
        // <script>
        // document.title = \"Seu $res\"
        // </script>
        // ";
        switch ($res) {
            case 'Saldo':
                // require 'controle-autenticacao.php';
                // require '../banco.php';
                require '../model/Usuario.Class.php';
                // echo "ola";
                // $user->mostrarInfo();
                $conta = $_SESSION['conta'];
                $senha = $_SESSION['senha'];
                $user2 = new Usuario($conta, $senha);
                $user2->saldo($conta);
                break;
            case 'Saque':
                echo "Sua opção foi $res";
                break;
            case 'Pix':
                break;
            case 'Recarga':
                echo "Sua opção foi $res";
                break;
            case 'Sair':
                echo "Sua opção foi $res";
                break;
            default:
                echo "
            <script>
            document.title = \"ERRO 404\"
            </script>
            ";
                break;
        }
    }
