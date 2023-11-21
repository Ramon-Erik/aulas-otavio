<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu perfil | SSPCS</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <main>

        <?php
        $cpf = $_GET['cpf'];
        try {
            $pdo = new pdo("mysql:host=localhost; dbname=pr_autenticacao", "root", "");
            $consulta = "SELECT * FROM funcionarios WHERE cpf = :cpf";
            $consultar = $pdo->prepare($consulta);
            $consultar->bindValue(":cpf", $cpf);
            $consultar->execute();
            $resultado = $consultar->fetch(PDO::FETCH_ASSOC);
            echo "<div class='linha'>Nome: ". $resultado['nome'] . "</div>";
            echo "<div class='linha'> CPF: ". $resultado['cpf'] . "</div>";
        } catch (PDOException $e) {
            echo "Erro com a conexão " . $e;
        } catch (Exception $e) {
            echo "Erro genérico... " . $e;
        }
        ?>
    </main>
</body>
</html>