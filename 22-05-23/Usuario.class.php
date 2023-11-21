<?php
class Usuario {
    public $nome;
    public $data_nasc;

    public function __construct($nome, $data){
        $this->nome = $nome;
        $this->data_nasc = $data;
    }

    public function getNome(){
        return $this->nome;
    }
    public function getNomeCompleto(){
        $nome_completo = explode('', $this->nome);
        return $nome_completo;
    }
    public function getUltimoNome(){
        $ultimo_nome = $this->getNomeCompleto();
        return $ultimo_nome;
    } 
    public function mostrarNome($indice=false){
        foreach ($this->nome as $i => $nome) {
            if ($indice) {
                $i += 1;
                echo " {$i}o nome (" . $nome .") tem "; 
                echo strlen($nome) . " letras<br>"; 
            } else {
                echo "nome $nome, tem " . strlen($nome);
            }
        }
    }
}