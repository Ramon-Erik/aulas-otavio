<?php

  Class Usuario{
    public function cadastrarUsuario ($email, $senha){
         $pdo = new pdo("mysql:host=localhost; dbname=salaberga0 01","root","");
         $consulta = "insert into usuarios values(null,:email,:senha)";

        $consultar = $pdo->prepare($consulta);
        $consultar->bindValue(":email", $email);
        $consultar->bindValue(":senha", $senha);
        $consultar->execute();
         
    }
    public function recSenha ($email){
      $pdo = new pdo("mysql:host=localhost; dbname=salaberga001","root","");
      $consulta = "select * from usuarios where email =:email";
     $consultar = $pdo->prepare($consulta);
     $consultar->bindValue(":email", $email);

     $consultar->execute();
     foreach ($consultar as $value){
        echo  "Senha = " .$value['senha'];
      }
    }
    public function relatorio (){
      $pdo = new pdo("mysql:host=localhost; dbname=salaberga001","root","");
      $consulta = "select nome, valor from alunos inner join contato on alunos.id = contato.id_aluno";

     $consultar = $pdo->prepare($consulta);
     $consultar->execute();

     echo '<table border=\'1\'>';
     echo '<tr><td>Nome</td><td>Contato</td>';

     foreach ($consultar as $value){
        echo '<tr><td>' . $value['nome'] . '</td>'; 
        echo '<td>' . $value['valor'] . '</td></tr>'; 
     }
     echo '</table>';
    }
    public function autenticar($email, $senha){
      $pdo = new pdo("mysql:host=localhost; dbname=salaberga001","root","");
      $consulta = "select * from usuarios where email =:email and senha =:senha"; 
     $consultar = $pdo->prepare($consulta);
     $consultar->bindValue(":email", $email);
     $consultar->bindValue(":senha", $senha);
     $consultar->execute();
     $result = $consultar->rowCount();
     if($result>0){
     header("location:https://www.google.com"); 
    }else{
        header("location:https://www.instagram.com");
      }
  }
}
