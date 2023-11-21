<?php 

if (isset($_POST['opc'])) {
    $res = $_POST['opc'];
    // header('location:banco.php'); ir para algum canto
    require 'banco.php';
    session_start();
    switch ($res) {
        case 'Saldo':
            foreach ($clientes as $cli) {
                if ($cli['conta'] == $_SESSION['conta']) {
                    echo $cli['saldo'];
                }
            }
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
            # code...
            break;
    }
}