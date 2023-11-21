<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERRO</title>
</head>

<body>
    <main>
        <div class="alerta">
            <?php
            if (isset($_POST['erro'])) {
                $tipo_erro = $_POST['erro'];
                $msg;
                switch ($tipo_erro) {
                    case '404':
                        $msg = "";
                        break;
                    default:
                        # code...
                        break;
                }
            }
            ?>
        </div>
    </main>
</body>

</html>