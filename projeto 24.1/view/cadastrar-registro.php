<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faça um Regsitro</title>
    <link rel="stylesheet" href="css/registro.css">
</head>

<body>
    <main>
        <h1>Registrar atraso</h1>
        <form action="../control/controle-registro.php" method="POST">
            <select name="ano">
                <option value="1°"> 1° ANO </option>
                <option value="2°"> 2° ANO </option>
                <option value="3°"> 3° ANO </option>
            </select>
            <br>
            <select name="turma">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
            </select>
            <br>
            <select name="id_aluno">
                <?php
                    require('../model/Aluno.Class.php');
                    $aluno = new Aluno();
                    $aluno->listar_alunos("z","z");
                ?>
            </select>
            <br>
            <select name="motivo">
                <option>banheiro</option>
                <option>pessoal</option>
                <option>consulta</option>
                <option>lanche</option>
                <option>transporte</option>
                <option>projeto</option>
                <option>alinhamento</option>
            </select>
            <br>
        
            <input type="submit" name="cadastro_atraso" value="Cadastrar">
        </form>
    </main>
</body>

</html>