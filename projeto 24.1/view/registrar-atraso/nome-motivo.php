<?php 
session_start();
if ($_SESSION['tipo'] != 'admin') {
    echo '<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Acesso negado!</title>
    </head>
    <body>
    <script>
        alert("Acesso negado! Você não pode registrar atrasos")
        window.location.href = "http://localhost/escola/aulas-otavio/projeto%2024.1/view/login.php";
    </script>
    </body>
    </html>';
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faça um Regsitro</title>
    <link rel="stylesheet" href="../css/registro.css">
</head>

<body>
    <main>
        <h1>Registrar atraso</h1>
        <form action="../../control/controle-registro.php" method="POST">
            <div class="linha">
                <select name="id_aluno">
                    <?php
                        require_once('../../model/Aluno.Class.php');
                        $aluno = new Aluno();
                        $aluno->listar_alunos();
                    ?>
                </select>
            </div>
            <div class="linha">
                <select name="motivo">
                    <option>banheiro</option>
                    <option>pessoal</option>
                    <option>consulta</option>
                    <option>lanche</option>
                    <option>transporte</option>
                    <option>projeto</option>
                    <option>alinhamento</option>
                </select>
            </div>
            <input type="submit" name="cadastro_atraso" value="Cadastrar">
        </form>
    </main>
</body>

</html>