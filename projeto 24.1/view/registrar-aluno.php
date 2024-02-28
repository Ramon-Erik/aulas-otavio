<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre um aluno</title>
    <link rel="stylesheet" href="css/registro.css">
</head>

<body>
    <main>
        <h1>Registrar aluno</h1>
        <form action="../control/controle-aluno.php" method="POST">
            <div class="linha">
                <input type="text" name="nome" id="nomeId" placeholder="Seu nome">
            </div>
            <div class="linha">
                <select name="ano">
                    <option value="1"> 1° ANO </option>
                    <option value="2"> 2° ANO </option>
                    <option value="3"> 3° ANO </option>
                </select>
            </div>
            <div class="linha">
                <select name="turma">
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select>
            </div>
            <div class="linha"><input type="submit" name="cadastro_aluno" value="Cadastrar"></div>
        </form>
    </main>
</body>

</html>