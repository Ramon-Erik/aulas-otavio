<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/relatorio.css">
    <title>Relatório de usuários</title>
</head>
<body>
    <table>
        <tr>
            <th>nome</th>
            <th>cpf</th>
            <th>contato</th>
        </tr>
    <?php 
        try {
            $pdo = new PDO("mysql:dbname=crud_info;host=localhost", "root", "");
            $consulta = $pdo->prepare("select nome, cpf, valor from usuarios inner join contatos on usuarios.id = contatos.id_usuario");
            $consulta->execute();
            $res = $consulta->fetchAll(PDO::FETCH_ASSOC);
            foreach ($res as $linha) {
                echo "<tr>";
                foreach ($linha as $valor) {
                    echo "<td>" . $valor . "</td>";
                }
                echo "</tr>";
            }
        } catch (PDOException $e) {
            echo "Falha ao acessar o banco " . $e->getMessage();
        } catch (Exception $e) {
            echo "Falha ao carregar a página" . $e->getMessage();
        }
    ?>
    </table>
</body>
</html>