<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entre em uma conta sua!</title>
    <link rel="stylesheet" href="../css/registro.css">
</head>
<body>
    <main>
        <h1>Faça login em sua conta!</h1>
        <form action="../../control/controle-login.php" method="post">
            <div class="linha">
                <label for="emailId">Informe seu email:</label>
            </div>
            <div class="linha">
                <input type="email" name="email" id="emailId" placeholder="exemplo@gmail.com" required>
            </div>
            <div class="linha">
                <label for="senhaId">Informe sua senha:</label>
            </div>
            <div class="linha">
                <input type="password" name="senha" id="senhaId" required>
            </div>
            <div class="linha">
                <input type="submit" name="logar" id="logarId" value="Fazer login" required>
            </div>
        </form>
    </main>
</body>
</html>