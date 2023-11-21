<?php
    if (isset($_POST['opc'])) {
        $res = $_POST['opc'];
        require '../banco.php';
        session_start();
        echo "sua escolha foi $res";
        switch ($res) {
            case 'Saldo':
                require 'controle-autenticacao.php';
                $user->saldo($conta);

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
                session_destroy();
                header('location:../view/index.php');
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
