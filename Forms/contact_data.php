<?php

#=================================================================================
#===========================  تصمين الملفات==========================================
require_once '../FileConnection/Data_connection.php';
require_once '../Classes/Achieve.php';
require_once '../Classes/Component.php';
#=================================================================================
#===========================  تعريف الكلاسات==========================================
$a = new Achieve();
$Component = new Component();
#=================================================================================
#$array_var=array();
$array_var[] = $Name = filter_var($_POST['Name'], FILTER_SANITIZE_STRING);
$array_var[] = $Mail = filter_var($_POST['Mail'], FILTER_SANITIZE_STRING);
$array_var[] = $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
#===========================  تعريف الكلاسات==========================================
$true = TRUE;
$msgerr = "";
if (!$a->empty_filed($Name)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($Mail)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($message)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if ($true):
    try {
        $sql = "INSERT INTO `contact` (`id`,`Name`,`Mail`,`message`) VALUES (NULL, ?,?,?)";
        $array = array();
        $a->sql($Data_communication, $sql, $array_var);
        echo 1;
    } catch (PDOException $ex) {
        echo $ex;
    }
endif;
?>