<?php

error_reporting("E_ALL & ~E_NOTIC");
require_once '../../../../FileConnection/Data_connection.php';
require_once '../../../../Classes/Achieve.php';
$a = new Achieve();
$true = TRUE;
$msgerr = "";
//=================================
$array_var=array();
$array_var[]=$ads = $_POST['ads'];
$array_var[]=$id= filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
//=========================
if (!$a->empty_filed($id)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($ads)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if ($true == TRUE):
    try {
        $SQL = "UPDATE `googel_ads` SET `ads`= ? WHERE `googel_ads`.`id`= ?;";
        $array = array();
        $a->sql($Data_communication, $SQL, $array_var);
        echo("<meta http-equiv='refresh' content=?>");
        $msgerr .= "<div class='alert alert-success'>تم تعديل الخبر بنجاح</div>";
    } catch (PDOException $ex) {
        echo $ex;
    }
endif;
echo $msgerr;
?>