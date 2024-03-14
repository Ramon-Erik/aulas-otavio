<?php

class Usuario {
    public function cadastrar_usuario($tipo, $senha, $email) {
        $pdo = new pdo("mysql:host=localhost; dbname=registro_atraso_ramon", "root", "");
        $consulta = "INSERT INTO usuario VALUES (null, :email, :senha, :tipo)";

        $consulta_feita = $pdo->prepare($consulta);
        $consulta_feita->bindValue(":email", $email);
        $consulta_feita->bindValue(":senha", $senha);
        $consulta_feita->bindValue(":tipo", $tipo);
        $consulta_feita->execute();
        
        // header('location:../view/login.html');
    }

    public function listar_usuarios() {
        $pdo = new pdo("mysql:host=localhost; dbname=registro_atraso_ramon", "root", "");
        $consulta = "select * from usuario order by tipo, email;";
        $consulta_feita = $pdo->prepare($consulta);
        $consulta_feita->execute();

        echo '<table border=1>
        <tr>
            <th colspan=2>Relatório de Usuarios</th>
            
        </tr>
        <tr>
        <th>Email</th>
        <th>Tipo</th>
        </tr>';

        foreach ($consulta_feita as $value) {
            // var_dump($value);
            echo'<tr><td>' .$value['email'] . '</td>';
            echo '<td>'. $value['tipo'] . '</td></tr>';
        }
        echo '</table>';
    }

    public function login($email, $senha) {
        try {
            $pdo = new pdo("mysql:host=localhost; dbname=registro_atraso_ramon", "root", "");
            $consulta = 'select * from usuario where email = :email and senha = :senha';
            
            $consultar = $pdo->prepare($consulta);
            $consultar->bindValue(":email", $email);
            $consultar->bindValue(":senha", $senha);
            $consultar->execute();
            $resultado = $consultar->fetch(PDO::FETCH_ASSOC);
            
            if ($resultado['senha'] == $senha) {
                session_start();
                $_SESSION['id_usuario'] = $resultado['id'];
                $_SESSION['tipo'] = $resultado['tipo'];
                switch ($resultado['tipo']) {
                    case 'admin':
                        header("location:../view/cadastrar-registro-1.php");
                        break;
                    case 'aluno':
                        header("location: ../view/cadastrar-registro-1.php");
                        break;
                    default:
                    header("location: https://google.com");
                        break;
                }
            } else  {
                var_dump($resultado);
                echo '<pre>'. print_r($resultado).'</pre>';
            }
        } catch (PDOException $e) {
            echo "Erro com a conexão " . $e;
        } catch (Exception $e) {
            echo "Erro genérico... " . $e;
        }
    }
}
