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
  
    public function autenticar($email, $senha) {

        $pdo = new pdo("mysql:host=localhost; dbname=registro_atraso_ramon", "root", "");
        $consulta = "select * from usuario where email=:email and senha=:senha";

        $consulta_feita = $pdo->prepare($consulta);
        $consulta_feita->bindValue(":email", $email);
        $consulta_feita->bindValue(":senha", $senha);
        $consulta_feita->execute();
        $y = $consulta_feita->rowCount();
        if ($y>0) {
            /*session_start();
            $_SESSION['email'];
            foreach($variable as $value){

            }*/
            header('location:../control/controle-login.php?opc=3');
        } else {
            header('location:../control/controle-login.php?opc=4');
            
            
        }
        
        
        
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

    
}
