<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco Infor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php
        session_start();
        if (isset($_SESSION['conta'])) {
            echo $_SESSION['conta'];       
        }
        ?>
        <h1>Seu Banco Infor</h1>
        <form action="controle-menu.php" method="post">
            <div class="coluna">
                <h3>Desejo ver meu <strong>Saldo</strong>!</h3>
                <input type="submit" value="Saldo" name="opc">
            </div>
            <div class="coluna">
                <h3>Desejo realizar um <strong>Saque</strong>!</h3>
                <input type="submit" value="Saque" name="opc">
            </div>
            <div class="coluna">
                <h3>Desejo realizar um <strong>pix</strong>!</h3>
                <input type="submit" value="Pix" name="opc">
            </div>
            <div class="coluna">
                <h3>Desejo realizar uma <strong>Recarga</strong>!</h3>
                <input type="submit" value="Recarga" name="opc">
            </div>
            <div class="coluna">
                <h3>Desejo <strong>Sair</strong>!</h3>
                <input type="submit" value="Sair" name="opc">
            </div>
        </form>
    </main>
    <footer>
        <p>&copy; Por <a href="http://github.com/ramon-erik" target="_blank" rel="noopener noreferrer">Ramon Erik</a></p>
    </footer>
</body>
</html>