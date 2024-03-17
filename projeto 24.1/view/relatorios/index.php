<?php 
    session_start();
    if ((isset($_SESSION['tipo']))) {
        $id = $_SESSION['id_usuario'];
    } else {
        header('location: ..login/index.php');
    }
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relátorio de Dados</title>
    <link rel="stylesheet" href="../css/registro.css">
</head>
<body>
    <main>
        <h1>Clique no botão para gerar seu relatório</h1>
        <?php 
            if ($_SESSION['tipo'] == 'aluno') {
                require_once('../../model/Aluno.Class.php');
                $aluno = new Aluno;
                $aluno->listar_aluno($_SESSION['id_usuario']);
            }
        ?>
    </main>
</body>
</html>