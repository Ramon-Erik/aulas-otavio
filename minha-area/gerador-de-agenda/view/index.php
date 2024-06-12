<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Agenda | Faça a agenda de maneira prática</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <?php 
        echo '<h1>Agenda do dia ' . date('d/m/Y') . ' (' . date('l') . ')</h1>';
        ?>
        <form action="../control/control-agenda.php">
            <div class="linha">
                <label for="aulaUmId">
                    <h2>Aula 1:</h2>
                </label>
                <select name="aulaUm" id="aulaUmId">
                    <option value="">Matématica</option>
                </select>
            </div>
            <div class="linha">
                <label for="conteudoAulaUmId">
                    <h4>Conteúdo:</h4>
                </label>
                <textarea name="conteudoAulaUm" id="conteudoAulaUmId" cols="30" rows="5" placeholder="O que foi passado em sala?"></textarea>
            </div>
            <div class="linha">
                <label for="aulaDoisId">
                    <h2>Aula 2:</h2>
                </label>
                <select name="aulaDois" id="aulaDoisId">
                    <option value="">Matématica</option>
                </select>
            </div>
            <div class="linha">
                <label for="conteudoAulaDoisId">
                    <h4>Conteúdo:</h4>
                </label>
                <textarea name="conteudoAulaDois" id="conteudoAulaDoisId" cols="30" rows="5" placeholder="O que foi passado em sala?"></textarea>
            </div>
            <div class="linha">
                <input type="submit" name="criarAgenda" value="Criar agenda">
            </div>
        </form>
        <!-- <form action="..control/" method="post">
            <?php 
            // require_once('../model/Agenda.Class.php');
            // $agenda = new Agenda;
            // $agenda->mostrar_aulas();
            ?>
        </form> -->
        <a href="#" target="_blank" rel="noopener noreferrer">Alterar cronograma de aulas</a>
    </main>
</body>
</html>