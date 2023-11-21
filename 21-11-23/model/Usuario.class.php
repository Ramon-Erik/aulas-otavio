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

    public function relatorioNotas (){
      $pdo = new pdo("mysql:host=localhost; dbname=escola_201123","root","");
      $consulta = "select nome, nota from aluno inner join notas on aluno.id = notas.id_aluno";

     $consultar_aluno_notas = $pdo->prepare($consulta);
     $consultar_aluno_notas->execute();
     
     
     $consulta = "select nome_disc, nome from professor inner join disciplina on professor.id = disciplina.id_professor";
     $consultar_disc_prof = $pdo->prepare($consulta);
     $consultar_disc_prof->execute();

     
     echo '<table border=\'1\'>';
     echo '<tr><td>Nome</td><td>Nota</td><td>Disciplina</td><td>Profesor</td>';
     
     foreach ($consultar_aluno_notas as $value){
       echo '<tr><td>' . $value['nome'] . '</td>'; 
       echo '<td>' . $value['nota'] . '</td>';

      }
      echo $consultar_disc_prof['nome_disc'];
     foreach ($consultar_disc_prof as $value){
        echo '<td>' . $value['nome_disc'] . '</td></tr>'; 
        echo '<td>' . $value['nome'] . '</td>'; 
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
