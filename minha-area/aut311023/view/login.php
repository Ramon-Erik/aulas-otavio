<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuários</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <main>
        <form action="../control/controleUsuario.php" method="POST">
            <div>
                <label for="nomeUsuario">Nome</label>
                <input type="text" name="nomeUsuario" id="nomeUsuario">
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="email@name.com">
            </div>
            <div>
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha" placeholder="senha">
            </div>
            <div class="center">
                <input type="submit" name="btn" value="logar">
                <input type="hidden" name="id" value="4">
                <div><a href="cadastrar.php">Cadastrar-senha</a></div>
                <div><a href="relatoriousuario.php">Relatório</a></div>
                <div><a href="recuperar.php">Recuperar-senha</a></div>
            </div>
        </form>
    </main>
</body>

</html>