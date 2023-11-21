<?php 

require_once('../model/Usuario.class.php');

if (isset($_POST['btn'])) {
    $pagina = $_POST['id'];
    $user = new Usuario("", "");
    
    switch ($pagina) {
        case 'telaCad':
            $nome         = $_POST['nomeCad'];
            $senha        = $_POST['senhaCad'];
            $cpf          = $_POST['cpfCad'];
            $tipoContato  = $_POST['tipoContatoCad'];
            $valorContato = $_POST['valorContatoCad'];
            $rua          = $_POST['ruaCad'];
            $num          = $_POST['numeroCad'];
            $bairro       = $_POST['bairroCad']; 
            $cidade       = $_POST['cidadeCad'];
            $uf           = $_POST['ufCad'];
            
            $user->cadastrar($nome, $senha, $cpf, $tipoContato, $valorContato, $rua, $num, $bairro, $cidade, $uf); 
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