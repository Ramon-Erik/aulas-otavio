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
                <select name="ano">
                    <option value="1">1° ANO </option>
                    <option value="2">2° ANO </option>
                    <option value="3">3° ANO </option>
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
            <div class="linha">
                <input type="submit" name="prox" value="Avançar">
            </div>
            <div class="linha">
                <input type="submit" name="registro_turma" value="Relatório por turma">
            </div>
        </form>
    </main>
</body>

</html>