<?php 
    session_start();
    if ((isset($_SESSION['tipo']))) {
        $id = $_SESSION['id_usuario'];
        if ($_SESSION['tipo'] = 'aluno') {
            header('location: atrasos-aluno/index.php');
        }
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
        <h1>Personalize seu relatório</h1>
        <?php 
            if ($_SESSION['tipo'] == 'aluno') {
                require_once('../../model/Aluno.Class.php');
                $aluno = new Aluno;
                $dados = $aluno->get_dados_aluno($_SESSION['id_usuario']);
                echo '<p>R</p>';
            }
        ?>
    </main>
</body>
</html>