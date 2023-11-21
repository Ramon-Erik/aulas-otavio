<?php 

require_once('../model/Usuario.class.php');

if (isset($_POST['btn'])) {
    $pagina = $_POST['id'];
    $user = new Usuario();
    
    switch ($pagina) {
        case 'cadastrar':
            $nome         = $_POST['nome'];
            $senha        = $_POST['senha'];
            $cpf          = $_POST['cpf'];
            
            $matricula    = $_POST['matricula'];

            $tipoContato  = $_POST['tipoContato'];
            $valorContato = $_POST['valorContato'];
            $rua          = $_POST['rua'];
            $num          = $_POST['numero'];
            $bairro       = $_POST['bairro']; 
            $cidade       = $_POST['cidade'];
            $uf           = $_POST['uf'];
            
            $user->cadastrar($nome, $senha, $cpf, $matricula, 
                            $tipoContato, $valorContato,
                            $rua, $num, $bairro, $cidade, $uf); 
            break;
        case 'telaLogin':
            $senha        = $_POST['senhaLogin'];
            $cpf          = $_POST['cpfLogin'];
            $user->login($cpf, $senha);
            break;
        default:
            echo 'erro ' . $pagina;
            break;
        }
} else {
        echo 'Não foi encontrado botão de envio.';
}