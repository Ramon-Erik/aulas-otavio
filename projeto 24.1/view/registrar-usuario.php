<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRAR USUARIO</title>
    <link rel="stylesheet" href="css/registro.css">
</head>

<body>
    <main>
        <h1>Registrar usuario</h1>
        <form action="../control/controle-usuario.php" method="POST">
            <div class="linha">
                <select name="tipo">
                    <option value="admin">Admin</option>
                    <option value="aluno">Aluno</option>
                    <option value="professor">Professor</option>
                </select>
            </div>
            <div class="linha">
                <label for="emailId">Seu email</label>
                <input type="email" name="email" id="emailId" required>
            </div>
            <div class="linha">
                <label for="senhaId">Seu senha</label>
                <input type="password" name="senha" id="senhaID" required>
            </div>
            <input type="submit" name="cadastro_usuario" value="Cadastrar">
        </form>
    </main>
</body>

</html>