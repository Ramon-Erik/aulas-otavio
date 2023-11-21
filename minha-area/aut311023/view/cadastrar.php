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
        <div class="caixas">
            <form action="../control/controleUsuario.php" method="POST">
                <div class="linha">
                    <input type="text" name="nome" id="nome" placeholder="">
                </div>
                <div class="linha">
                    <input type="text" name="cpf" id="cpf">
                </div>
                <div class="linha">
                    <select name="tipoContato" id="tipoContato">
                        <option value="email">Email</option>
                        <option value="whats">Whats</option>
                        <option value="fone">Fone</option>
                    </select>
                    <input type="text" name="valorContato" id="valorContato">
                </div>
                <div class="linha">
                    <input type="text" name="rua">
                </div>
                <div class="linha">
                    <input type="text" name="numero">
                </div>
                <div class="linha">
                    <input type="text" name="bairro">
                </div>
                <div class="linha">
                    <input type="text" name="cidade">
                </div>
                <div class="linha">
                    <input type="text" name="UF">
                </div>
                <div class="linha">
                    <input type="text" name="nomeUsuario">
                </div>
                <div class="linha">
                    <input type="email" name="email" placeholder="email@name.com">
                </div>
                <div class="linha">
                    <input type="password" name="senha" placeholder="senha">
                </div>
                <div class="linha">
                    <input type="submit" name="btn" value="cadastrar">
                </div>
                <div class="linha">
                    <input type="hidden" name="id" value="1">
                </div>

            </form>
        </div>
    </main>
</body>

</html>