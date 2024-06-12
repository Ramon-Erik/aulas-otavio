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
        echo "indo logar";
        try {
            $pdo = new pdo("mysql:host=localhost; dbname=registro_atraso_ramon", "root", "");
            $consulta = 'select * from usuario inner join contato on usuario.id = contato.id_usuario where contato.endereco_email = :email and usuario.senha = :senha';
            
            $consultar = $pdo->prepare($consulta);
            $consultar->bindValue(":email", $email);
            $consultar->bindValue(":senha", $senha);
            $consultar->execute();
            echo "fez pesquisa\n";
            $resultado = $consultar->fetch(PDO::FETCH_ASSOC);
            
            if ($resultado['senha'] == $senha) {
                session_start();
                $_SESSION['id_usuario'] = $resultado['id'];
                $_SESSION['tipo'] = $resultado['tipo'];
                switch ($resultado['tipo']) {
                    case 'admin':
                        header("location:../view/registrar-atraso/ano-turma.php");
                        break;
                    case 'aluno':
                        header("location: ../view/relatorios/index.php");
                        break;
                    default:
                        echo 'deu erro ai, default '. $resultado['tipo'];
                        echo "senha certa pesquisa: " . $resultado['senha'] . ' = senha passada ' . $senha . '<pre>';
                        print_r($consulta);
                        break;
                } // switch
            } else  {
                var_dump($consultar);
                echo '<p>erro ao verificar senha</p><pre>'. print_r($consultar).'</pre>';
        }
        } catch (PDOException $e) {
            echo "Erro com a conexão " . $e;
        } catch (Exception $e) {
            echo "Erro genérico... " . $e;
        }
    }
}
