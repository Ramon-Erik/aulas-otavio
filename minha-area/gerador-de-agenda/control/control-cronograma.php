<?php
require_once('../model/Agenda.Class.php');

if (isset($_POST['cron-aulas'])) {
    $agenda = new Agenda;
    $agenda->definir_crongrama($_POST);
}
?>