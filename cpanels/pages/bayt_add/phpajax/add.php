<?php

error_reporting("E_ALL & ~E_NOTIC");
require_once '../../../../Classes/Achieve.php';
require_once '../../../../FileConnection/Data_connection.php';
require_once '../../../../FileConnection/Extra_functions.php';
require_once '../Settings.php';
$a = new Achieve();
$true = TRUE;
$msgerr = "";
$tabel = tabel;
$array_var = array();
$Title = filter_var($_POST['Title'], FILTER_SANITIZE_STRING);
$Company = filter_var($_POST['Company'], FILTER_SANITIZE_STRING);
$Keywords = filter_var($_POST['Keywords'], FILTER_SANITIZE_STRING);
$Minimum = filter_var($_POST['Minimum'], FILTER_SANITIZE_STRING);
$Maximum = filter_var($_POST['Maximum'], FILTER_SANITIZE_STRING);
$specialty = filter_var($_POST['specialty'], FILTER_SANITIZE_STRING);
$Email = filter_var($_POST['Email'], FILTER_SANITIZE_EMAIL);
$Country = filter_var($_POST['Country'], FILTER_SANITIZE_STRING);
$City = filter_var($_POST['City'], FILTER_SANITIZE_STRING);
$bayt = $_POST['bayt'];
//=========================
$file_name = $_FILES['Files']['name'];
$file_size = $_FILES['Files']['size'];
$file_tmp = $_FILES['Files']['tmp_name'];
$file_type = $_FILES['Files']['type'];
$error = $_FILES['Files']['error'];
$extensions = array("jpeg", "jpg", "png", "gif", "pdf");
$ext = pathinfo($file_name, PATHINFO_EXTENSION);
//=================================
if (!$a->empty_filed($Title)):
    $msgerr .= "<div class='alert alert-danger'>1من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($Company)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ2</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($Keywords)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ3</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($Minimum)):
endif;
if (!$a->empty_filed($Maximum)):
    $_POST['Minimum'] = " ";
endif;
if (!$a->empty_filed($specialty)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ6</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($Email)):
    $Email = "";
endif;
if (!$a->empty_filed($Country)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($City)):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!$a->empty_filed($_POST['Image'])):
    $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
    $true = FALSE;
endif;
if (!file_exists($file_tmp)) {
    
}
if ($true == TRUE):
    try {
        //=======================PHPMailer==================================
        $array_var = array();
        $array_var[] = $Title = filter_var($_POST['Title'], FILTER_SANITIZE_STRING);
        $array_var[] = $Company = filter_var($_POST['Company'], FILTER_SANITIZE_STRING);
        $array_var[] = $Keywords = filter_var($_POST['Keywords'], FILTER_SANITIZE_STRING);
        $array_var[] = $Minimum = filter_var($_POST['Minimum'], FILTER_SANITIZE_STRING);
        $array_var[] = $Maximum = filter_var($_POST['Maximum'], FILTER_SANITIZE_STRING);
        $array_var[] = $specialty = filter_var($_POST['specialty'], FILTER_SANITIZE_STRING);
        $array_var[] = $Email = filter_var($_POST['Email'], FILTER_SANITIZE_EMAIL);
        $array_var[] = $Country = filter_var($_POST['Country'], FILTER_SANITIZE_STRING);
        $array_var[] = $City = filter_var($_POST['City'], FILTER_SANITIZE_STRING);
        $array_var[] = $Date = date('Y-m-d');
        $array_var[] = $Today = time();
        $array_var[] = $Month = date('m');
        if (!file_exists($file_tmp)) {
            $array_var[] = '';
        } else {
            $array_var[] = $File = files_add($file_tmp, $file_name, "../../../../Public/$tabel/");
        }
        $array_var[] = $User_type = "admin";
        $array_var[] = $Views = "1";
        $array_var[] = $Acceptance = "1";
        if (!$a->empty_filed($_POST['Image'])):
            $array_var[] = "//img0cf.b8cdn.com/images/people/emp-no-logo120X120.png";
        else:
            $array_var[] = filter_var($_POST['Image'], FILTER_SANITIZE_STRING);
        endif;
        $array_var[] = "00";
        $array_var[] = $bayt;
        //=======================PHPMailer==================================
        $sql = "INSERT INTO `job` (`id`,`Title`,`Company`,`Keywords`,`Minimum`,`Maximum`,`specialty`,`Email`,`Country`,`City`,`Date`,`Today`,`Month`,`File`,`User_type`,`Views`,`Acceptance`,url,id_user,bayt) "
                . "VALUES (NULL, ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $array = array();
        $a->sql($Data_communication, $sql, $array_var);
        $msgerr .= "<div class='alert alert-success'>تم بنجاح اضافة موضوع جديد</div>";
//    ===============================================
        $section = Page;
        $labal = label;
        $time = time();
        $sql = "INSERT INTO `latest_additions` (`id`, `Section`, `Time`,`label`) VALUES (NULL, ?, ?,?);";
        $array = array($section, $time, $labal);
        $a->sql($Data_communication, $sql, $array);
    } catch (PDOException $ex) {
        echo $ex;
    } finally {
        $Data_communication = NULL;
    }
endif;
echo $msgerr;
?>