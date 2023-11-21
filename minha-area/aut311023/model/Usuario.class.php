<?php

  Class Usuario{
    public function cadastrarUsuario ($email, $senha){
         $pdo = new pdo("mysql:host=localhost; dbname=autenticacao_2023","root","");
         $consulta = "insert into usuarios values(null,:email,:senha)";

        $consultar = $pdo->prepare($consulta);
        $consultar->bindValue(":email", $email);
        $consultar->bindValue(":senha", $senha);
        $consultar->execute();
         
    }
    public function recSenha ($email){
      $pdo = new pdo("mysql:host=localhost; dbname=autenticacao_2023","root","");
      $consulta = "select * from usuarios where email =:email";
     $consultar = $pdo->prepare($consulta);
     $consultar->bindValue(":email", $email);

     $consultar->execute();
     foreach ($consultar as $value){
        echo  "Senha = " .$value['senha'];
      }
    }
    public function relatorio (){
      $pdo = new pdo("mysql:host=localhost; dbname=autenticacao_2023","root","");
      $consulta = "select * from usuarios";
     $consultar = $pdo->prepare($consulta);
     $consultar->execute();

     foreach ($consultar as $value){
        echo  "id = " .$value['id']." | "; 
        echo  "Email= " .$value['email']." | "; 
        echo  "Senha = " .$value['senha']." | "; 
     }
    }
    public function autenticar($email, $senha){
      $pdo = new pdo("mysql:host=localhost; dbname=autenticacao_2023","root","");
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
 
?>