<?php 
// conectar ao banco:
// qual banco de dados (sql, sqlserver)
// dbname 
// host
// usuario e senha
try {
    $pdo = new PDO("mysql:dbname=crud_pdo;host=localhost", "root", "");
} catch (PDOException $e) {
    echo "Erro banco" . $e->getMessage();
} catch (Exception $e) {
    echo "Erro generico " . $e->getMessage();
}
// fazer um insert
// usando prepare [passa parametro e depois substitui]

// $consultar = $pdo->prepare("INSERT INTO pessoa(nome,cpf) VALUES (:nome, :cpf)");
// $consultar->bindValue(":nome", "ramon"); // pede o parametro e o valor
// $consultar->bindValue(":cpf", "09994774395");
// // $consultar->bindParam(":nome", $nome); //pede o parametro e uma variavel para substituir
// $consultar->execute();

// usando o query (menos seguro)
// $pdo->query("INSERT INTO pessoa(nome,cpf) VALUES ('Bia', '12345678911');")
//----------------------------------------------------------------------------------------------------
// DELETE
// $consultar = $pdo->prepare("DELETE FROM pessoa WHERE ID = :id");
// $consultar->bindValue(":id", 2);
// $consultar->execute();

// UPDATE
// $consultar = $pdo->prepare("UPDATE pessoa SET cpf = :cpf WHERE id = :id");
// $consultar->bindValue(":cpf", 1112223334445);
// $consultar->bindValue(":id", 1);
// $consultar->execute();

// SELECT
$consultar = $pdo->prepare("SELECT * FROM pessoa WHERE id = :id");
$consultar->bindValue(":id", 1);
$consultar->execute();
$res = $consultar->fetch(PDO::FETCH_ASSOC);
echo "<pre>";
print_r($res);
echo "</pre>";

foreach ($res as $key => $value) {
    echo $key . ": " . $value . "<br>";
}


?>