<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe o cronogrma de aulas</title>
</head>
<body>
    <main>
        <h1>Defina o cronogrma de aulas!</h1>
        <form action="../control/control-cronograma.php" method="post">
            <div class="linha">
                <label for="priHorario">1° horário:</label>
                <input type="text" name="pri-aula-nome" id="priHorario" placeholder="Nome da aula ex: química 1" required>
            </div>
            <div class="linha">
                <label for="segHorario">2° horário:</label>
                <input type="text" name="seg-aula-nome" id="segHorario" placeholder="Nome da aula ex: química 1" required>
            </div>
            <div class="linha">
                <label for="terHorario">3° horário:</label>
                <input type="text" name="ter-aula-nome" id="terHorario" placeholder="Nome da aula ex: química 1" required>
            </div>
            <div class="linha">
                <label for="quaHorario">4° horário:</label>
                <input type="text" name="qua-aula-nome" id="quaHorario" placeholder="Nome da aula ex: química 1" required>
            </div>
            <div class="linha">
                <label for="quiHorario">5° horário:</label>
                <input type="text" name="qui-aula-nome" id="quiHorario" placeholder="Nome da aula ex: química 1" required>
            </div>
            <div class="linha">
                <label for="sexHorario">6° horário:</label>
                <input type="text" name="sex-aula-nome" id="sexHorario" placeholder="Nome da aula ex: química 1" required>
            </div>
            <div class="linha">
                <label for="setHorario">7° horário:</label>
                <input type="text" name="set-aula-nome" id="setHorario" placeholder="Nome da aula ex: química 1" required>
            </div>
            <div class="linha">
                <label for="oitHorario">8° horário:</label>
                <input type="text" name="oit-aula-nome" id="oitHorario" placeholder="Nome da aula ex: química 1" required>
            </div>
            <div class="linha">
                <label for="nonHorario">9° horário:</label>
                <input type="text" name="non-aula-nome" id="nonHorario" placeholder="Nome da aula ex: química 1" required>
            </div>
            <div class="linha">
                <input type="submit" name="cron-aulas" value="Enviar">
            </div>
        </form>
    </main>
</body>
</html>