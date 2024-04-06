<?php 
    session_start();
    if (isset($_SESSION['ultima_resposta'])) {
        echo '<script>alert("Parece que você já respondeu o formulário hoje...")</script>';
    }   
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Satisfação Alimentar</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="https://icons.iconarchive.com/icons/aha-soft/desktop-buffet/48/Steak-icon.png" type="png">
</head>

<body>
    <main>
        <div class="cabecalho">
            <div class="linha-cab">
                <h1>Avaliação semanal da comida</h1>
                <h5>Só é possivel responder uma vez por dia!</h5>
            </div>
        </div>
        <form action="../control/controle-index.php" method="post">
            <div class="linha">
                <h2>Sua avaliação sobre a comida:</h2>
            </div>
            <div class="linha label">
                <label for="radio-bom">&#128513;</label>
                <input type="radio" name="satisfacao" id="radio-bom" value="bom" required>
                <label for="radio-regular">&#128528;</label>
                <input type="radio" name="satisfacao" id="radio-regular" value="regular" required>
                <label for="radio-ruim">&#128577;</label>
                <input type="radio" name="satisfacao" id="radio-ruim" value="ruim" required>
            </div>
            <div class="area-btn">
                <input type="submit" value="Enviar" name="btn" class="btn mandar"/>
                <input type="reset" value="Limpar" class="btn limpar">
            </div>
        </form>
        
    </main>
    <footer>
        <p>Site desenvolvido por <a href="https://instagram.com/29erik_" target="_blank" rel="noopener noreferrer">Ramon Erik (Informática 2022-2024)</a></p>
    </footer>
    <script src="js/script.js"></script>
</body>

</html>