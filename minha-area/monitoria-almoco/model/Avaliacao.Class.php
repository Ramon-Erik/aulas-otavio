<?php
class Avaliacao {
    public function cadastrar_avaliacao($av) {
        session_start();
        if (!isset($_SESSION['ultima_resposta']) || time() >=  $_SESSION['ultima_resposta'][1]) {
            $pdo = new pdo("mysql:host=localhost; dbname=monitoria_alimentar_salaberga", "root", "");
            $consulta = "INSERT INTO avaliacao VALUES (null,:av, curdate(), curtime())";
            
            $consulta_feita = $pdo->prepare($consulta);
            $consulta_feita->bindValue(":av", $av);
            $consulta_feita->execute();
            $_SESSION['ultima_resposta'] = [time(), strtotime('tomorrow')];
            header("location: ../view/index.php");
        } else {
            header("location: ../view/index.php");
        }

    }
    public function gerar_relatorio() {
        $pdo = new pdo("mysql:host=localhost; dbname=monitoria_alimentar_salaberga", "root", "");
        $consulta = "SELECT DISTINCT dia FROM avaliacao order by id DESC;";
        $consulta_feita = $pdo->prepare($consulta);
        $consulta_feita->execute();

        foreach ($consulta_feita as $arr) {
            // echo '<pre>'; print_r($arr); echo '</pre>';
            $dia = $arr[0];
            echo '<div class="relatorio"><h3>&gt; Avaliações do almoço do dia ' . date("d/m/Y", strtotime($dia)) . '</h3>';

            $consulta = "SELECT  dia, COUNT(CASE WHEN nota = 'ruim' THEN 1 END) AS total_ruim, COUNT(CASE WHEN nota = 'bom' THEN 1 END) AS total_bom, COUNT(CASE WHEN nota = 'regular' THEN 1 END) AS total_regular FROM avaliacao WHERE dia = :dia GROUP BY dia;";
            $consulta_total_feita = $pdo->prepare($consulta);
            $consulta_total_feita->bindValue(':dia', $dia);
            $consulta_total_feita->execute();
            foreach ($consulta_total_feita as $valor) {
                // echo ' total: ' . $valor[1] + $valor[2] + $valor[3] . '<br>'; echo ' ruim ' . $valor[1] . '<br>'; echo ' bom ' . $valor[2] . '<br>'; echo ' regular ' . $valor[3] . '<br>';
                $total =  $valor[1] + $valor[2] + $valor[3];
                $total_ruim = $valor[1];
                $total_bom = $valor[2];
                $total_regular = $valor[3];
                echo "<p>Total de avaliações do dia: $total; Bom: $total_bom; Regular: $total_regular; Ruim: $total_ruim </p>";
            }
            echo '<div class="charts" id="chart_div_' . $dia . '"></div></div>';
            echo " <script type=\"text/javascript\">
                google.charts.load('current', {'packages':['corechart']});
                google.charts.setOnLoadCallback(desenharGrafico" . date('d_m_Y', strtotime($dia)) . ")

                function desenharGrafico" . date("d_m_Y", strtotime($dia)) . "() {
                    var data = new google.visualization.DataTable();
                    data.addColumn('string', 'Topping');
                    data.addColumn('number', 'Slices');
                    data.addRows([
                        ['Bom', " . $total_bom .  "],
                        ['Regular', " . $total_regular . "],
                        ['Ruim', " . $total_ruim . "],
                    ]);
                    var options = {title:' ', width:400, height:300};
                    var chart = new google.visualization.PieChart(document.getElementById('chart_div_" . $dia . "'));
                    chart.draw(data, options);
            }</script>";

        }
    }
}
