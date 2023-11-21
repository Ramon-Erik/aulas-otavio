<?php
        if (isset($_GET['enviar'])) {
            $nome_completo = explode(' ', $_GET['nome']);
            $data = $_GET['data'];

            // separando yyyy, mm, ddd
            list($ano, $mes, $dia) = explode('-', $data);

            // data atual
            $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
            // Descobre a unix timestamp da data de nascimento do fulano
            $nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);

            // cálculo
            $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
            
     // require 'Usuario.class.php';
            // $idade = integer(substr(date('d/m/Y'), 0, 3));
            // var_dump($idade);
            if ( strtoupper($nome_completo[0]) == "RAMON") {
                echo "seja bem-vindo sr. $nome_completo[1] ";
            } else {
                echo "seja bem-vindo(a), \"$nome_completo[0]\", pessoa que não é o ramon";
            }
            echo "<br>Sua idade: $idade Anos";
            echo "<br>Seu ";
            foreach ($nome_completo as $i => $value) {
                $i += 1;
                echo " {$i}o nome (" . $value .") tem "; 
                echo strlen($value) . " letras<br>"; 
            }
        }
