<?php

error_reporting("E_ALL & ~E_NOTIC");
require_once '../Settings.php';
require_once '../../../../Classes/Achieve.php';
require_once '../../../../FileConnection/Data_connection.php';
require_once '../../../../FileConnection/Extra_functions.php';
$a = new Achieve();
$true = TRUE;
$msgerr = "";
$array_var = array();
$tabel = tabel;
$id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
$Title = filter_var($_POST['Title'], FILTER_SANITIZE_STRING);
$Company = filter_var($_POST['Company'], FILTER_SANITIZE_STRING);
$Keywords = filter_var($_POST['Keywords'], FILTER_SANITIZE_STRING);
$Minimum = filter_var($_POST['Minimum'], FILTER_SANITIZE_STRING);
$Maximum = filter_var($_POST['Maximum'], FILTER_SANITIZE_STRING);
$specialty = filter_var($_POST['specialty'], FILTER_SANITIZE_STRING);
$Email = filter_var($_POST['Email'], FILTER_SANITIZE_STRING);
$Country = filter_var($_POST['Country'], FILTER_SANITIZE_STRING);
$City = filter_var($_POST['City'], FILTER_SANITIZE_STRING);
$url = filter_var($_POST['url'], FILTER_SANITIZE_STRING);
//=======================PHPMailer==================================
$file_name = $_FILES['uploadFile']['name'];
$file_size = $_FILES['uploadFile']['size'];
$file_tmp = $_FILES['uploadFile']['tmp_name'];
$file_type = $_FILES['uploadFile']['type'];
$error = $_FILES['uploadFile']['error'];
$extensions = array("jpeg", "jpg", "png", "gif");
$ext = pathinfo($file_name, PATHINFO_EXTENSION);
//=================================
if (!$a->empty_filed($id)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($Title)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($Company)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($Keywords)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($Minimum)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($Maximum)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($specialty)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($Email)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($Country)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($City)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($url)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if ($true == TRUE):
    try {
        $array_var = array();       
        $array_var[] = $Title = filter_var($_POST['Title'], FILTER_SANITIZE_STRING);
        $array_var[] = $Company = filter_var($_POST['Company'], FILTER_SANITIZE_STRING);
        $array_var[] = $Keywords = filter_var($_POST['Keywords'], FILTER_SANITIZE_STRING);
        $array_var[] = $Minimum = filter_var($_POST['Minimum'], FILTER_SANITIZE_STRING);
        $array_var[] = $Maximum = filter_var($_POST['Maximum'], FILTER_SANITIZE_STRING);
        $array_var[] = $specialty = filter_var($_POST['specialty'], FILTER_SANITIZE_STRING);
        $array_var[] = $Email = filter_var($_POST['Email'], FILTER_SANITIZE_STRING);
        $array_var[] = $Country = filter_var($_POST['Country'], FILTER_SANITIZE_STRING);
        $array_var[] = $City = filter_var($_POST['City'], FILTER_SANITIZE_STRING);
        $array_var[] = $Date = date('Y-m-d');
        $array_var[] = $Today = time();
        $array_var[] = $Month = date('m');
        $array_var[] = $File = files_modified($file_tmp, "../../../../Public/$tabel/", $_POST['file'], $file_name);
        $array_var[] = $User_type ="admin";
        $array_var[] = $Views = "1";
        $array_var[] = $Acceptance = "1";
        if (!$a->empty_filed($_POST['url'])):
            $array_var[] = "//img0cf.b8cdn.com/images/people/emp-no-logo120X120.png";
        else:
            $array_var[] = filter_var($_POST['url'], FILTER_SANITIZE_STRING);
        endif;
         $array_var[] = $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
        
 $SQL = "UPDATE `job` SET `Title`= ?,`Company`= ?,`Keywords`= ?,`Minimum`= ?,`Maximum`= ?,`specialty`= ?,`Email`= ?,`Country`= ?,`City`= ?,`Date`= ?,`Today`= ?,`Month`= ?,`File`= ?,`User_type`= ?,`Views`= ?,`Acceptance`= ?,`url`= ? WHERE `job`.`id`= ?;";
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