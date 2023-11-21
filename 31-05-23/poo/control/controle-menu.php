<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    echo "</head>";
    echo "<body>";
    echo "local para ver algo<br>";
    if (isset($_POST['opc'])) {
        $res = $_POST['opc'];
        require '../banco.php';
        session_start();
        echo "algo: $res<br>";
        switch ($res) {
            case 'Saldo':
                foreach ($clientes as $cli) {
                    if ($cli['cliente'] == $_SESSION['conta']) {
                        echo "saldo: " . $cli['saldo'];
                    }
                }
                echo "<head><title>Saldo</title></head>";
                break;
            case 'Saque':
                echo "Sua opção foi $res";
                echo "<head><title>Saldo</title></head>";
                break;
            case 'Pix':
                echo "<head><title>Pix</title></head>";
                break;
            case 'Recarga':
                echo "Sua opção foi $res";
                echo "<head><title>Recarga</title></head>";
                break;
            case 'Sair':
                echo "Sua opção foi $res";
                echo "<head><title>Saindo...</title></head>";
                break;
            default:
                echo "Nenhuma opção selecionada";
                echo "<head><title>Erro 404</title></head>";
                break;
        }
    }
    ?>
    </body>

</html>