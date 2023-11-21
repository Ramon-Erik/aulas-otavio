<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seu saldo</title>
    <link rel="stylesheet" href="../style.css">

</head>

<body>
    <main>
        <div class="centro">
            <div class="caixa">
                <h3><?php session_start(); $nome = $_SESSION['cliente']; echo $nome; ?>, seu saldo é de:</h3>
                <?php
                $saldo = $_SESSION['saldo'];
                echo "<p><strong>R$" . number_format($saldo, 2, ',', '.') . "</p></strong>";
                ?>
            </div>
        </div>
    </main>

</body>

</html>