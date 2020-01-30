<?php

//error_reporting("E_ALL & ~E_NOTIC");
require_once '../../../../FileConnection/Data_connection.php';
require_once '../../../../Classes/Achieve.php';
require_once '../Settings.php';
$a = new Achieve();
$id = filter_var($_POST['Acceptance'], FILTER_SANITIZE_NUMBER_INT);
$tabel = tabel;
if (isset($id) && !empty($id) && is_numeric($id)) {
    try {
        $SQL = "UPDATE `job` SET `Acceptance`= 1 WHERE `job`.`id`= ?;";
        $array = array($id);
        $a->sql($Data_communication, $SQL, $array);
    } catch (PDOException $ex) {
        $Data_communication = NULL;
    } finally {
        $Data_communication = NULL;
    }
}
?>