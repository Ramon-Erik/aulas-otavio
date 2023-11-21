<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuários</title>
    <link rel="stylesheet" href="css/cadastro.css">
</head>
<body>
    <main>
        <div class="caixas">
            <form action="../control/controleUsuario.php" method="POST">
                <input type="text" name="nomeUsuario"> 
                <input type="email" name="email" placeholder="email@name.com"> 
                <input type="submit" name="btn" value="Recuperar senha"> 
                <input type="hidden" name="id" value="3"> 
               

            </form>
        </div>
    </main>
</body>
</html>