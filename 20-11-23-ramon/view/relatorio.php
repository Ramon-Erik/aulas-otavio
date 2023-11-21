<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório de usuários</title>
</head>
<body>
    <?php 
        try {
            $pdo = new PDO("mysql:dbname=crud_info;host=localhost", "root", "");
            $consulta = $pdo->prepare("SELECT * FROM usuarios;");
            $consulta->execute();
            $res = $consulta->fetchAll(PDO::FETCH_ASSOC);
            foreach ($res as $linha) {
                foreach ($linha as $chave => $valor) {
                    echo $chave . ": " . $valor . "<br>";
                }
                echo "<br><hr><br>";
            }
        } catch (PDOException $e) {
            echo "Falha ao acessar o banco " . $e->getMessage();
        } catch (Exception $e) {
            echo "Falha ao carregar a página" . $e->getMessage();
        }
    ?>
</body>
</html>