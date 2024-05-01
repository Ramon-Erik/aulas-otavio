<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Agenda | Faça a agenda de maneira prática</title>
</head>
<body>
    <main>
        <?php 
        echo '<h1>Agenda do dia ' . date('d/m/Y') . ' (' . date('l') . ')</h1>';
        ?>
        <form action="..control/" method="post">
            <?php 
            require_once('../model/Agenda.Class.php');
            $agenda = new Agenda;
            $agenda->mostrar_aulas();
            ?>
        </form>
        <a href="#" target="_blank" rel="noopener noreferrer">Alterar cronograma de aulas</a>
    </main>
</body>
</html>