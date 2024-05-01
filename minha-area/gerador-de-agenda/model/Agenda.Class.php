<?php

class Agenda {
    public function mostrar_aulas() {
        echo '1° aula:';
    }
    public function definir_crongrama($aulas) {
        $pdo = new pdo("mysql:host=localhost; dbname=gerador_de_agenda", "root", "");
        $consulta = "INSERT INTO cronogramas VALUES (null,:av, curdate(), curtime())";

        $consulta_feita = $pdo->prepare($consulta);
        $consulta_feita->bindValue(":av", $av);
        $consulta_feita->execute();
    }
}
