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
    <?php 
    session_start();
    if (isset($_SESSION['conta'])) {
        header('location:menu.php');
    } else {
        echo "vixe";
    }
    ?>
    <main>
        <h1>Seu Banco Infor</h1>
        <form action="controle-autenticacao.php" method="post">
            <div class="coluna index">
                <div class="linha">
                    <h2>Faça seu login</h2>
                </div>
                <div class="linha">
                    <label for="iNumConta">Núm de sua conta:</label>
                    <input type="text" placeholder="Ex: 1" name="numConta" id="iNumConta" required>
                </div>
                <div class="linha">
                    <label for="iNumConta">Sua senha:</label>
                    <input type="password" name="senha" id="iSenha" required>
                </div>
                <div class="linha">
                    <input type="submit" name="btn-autenticacao" value="Logar">
                </div>
            </div>
        </form>
    </main>
    <footer>
        <p>&copy; Por <a href="http://github.com/ramon-erik" target="_blank" rel="noopener noreferrer">Ramon Erik</a></p>
    </footer>
</body>
</html>