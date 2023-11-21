<?php
class Usuario {
    public function cadastrar($nome, $senha, $cpf, $matricula, $tipoContato, $valorContato, $rua, $num, $bairro, $cidade, $uf) {
        try {
            $pdo = new pdo("mysql:host=localhost; dbname=crud_info", "root", "");
            $consulta = "insert into usuarios values(null, :nome,:cpf, :senha, :matricula)";

            $consultar = $pdo->prepare($consulta);
            $consultar->bindValue(":nome", $nome);
            $consultar->bindValue(":cpf", $cpf);
            $consultar->bindValue(":matricula", $matricula);
            $consultar->bindValue(":senha", $senha);
            $consultar->execute();

            $id_ultimo_func = $pdo->prepare("SELECT id FROM usuarios ORDER BY id DESC LIMIT 1");
            $id_ultimo_func->execute();
            $id_func = $id_ultimo_func->fetch(PDO::FETCH_ASSOC);

            $consulta = "insert into contatos values(null, :valor ,:tipo, :id_usuario)";
            $consultar = $pdo->prepare($consulta);
            $consultar->bindValue(":tipo", $tipoContato);
            $consultar->bindValue(":valor", $valorContato);
            $consultar->bindValue(":id_usuario", $id_func['id']);
            $consultar->execute();
            
            $consulta = "insert into enderecos values(null, :rua, :numero, :cidade, :bairro, :uf, :id_usuario)";
            $consultar = $pdo->prepare($consulta);
            $consultar->bindValue(":rua", $rua);
            $consultar->bindValue(":numero", $num);
            $consultar->bindValue(":cidade", $cidade);
            $consultar->bindValue(":bairro", $bairro);
            $consultar->bindValue(":uf", $uf);
            $consultar->bindValue(":id_usuario", $id_func['id']);
            $consultar->execute();

            header('location:../view/login.html');
        } catch (PDOException $e) {
            echo "Erro com a conexão " . $e;
        } catch (Exception $e) {
            echo "Erro genérico... " . $e;
        }
    }
    public function login($cpfLogin, $senha) {
        try {
            $pdo = new pdo("mysql:host=localhost; dbname=pr_autenticacao", "root", "");
            $consulta = 'select * from usuarios where cpf = :cpf and senha = :senha';
            // echo "cpf: " . $cpfLogin . "<br>";
            // echo "sen: " . $senha . "<br>";
            
            $consultar = $pdo->prepare($consulta);
            $consultar->bindValue(":cpf", $cpfLogin);
            $consultar->bindValue(":senha", $senha);
            $consultar->execute();
            $resultado = $consultar->fetch(PDO::FETCH_ASSOC);
            
            var_dump($resultado);
            if (count($resultado) == 4) {
                header("location:../view/minha-area.php?cpf=$cpfLogin");
            } else  {
                var_dump($resultado);
            }
        } catch (PDOException $e) {
            echo "Erro com a conexão " . $e;
        } catch (Exception $e) {
            echo "Erro genérico... " . $e;
        }
    }
}
