<?php
require_once '../Classes/Achieve.php';
require_once '../Classes/Session.php';
require_once '../FileConnection/Data_connection.php';
require_once '../FileConnection/Extra_functions.php';
//=======================PHPMailer==================================
$class = new Achieve();
$session = new Session("index.php");
$hand = TRUE;
$msgerr = null;
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$Password = filter_var($_POST['Password'], FILTER_SANITIZE_STRING);
//=======================PHPMailer==================================
if ($_SERVER["REQUEST_METHOD"] == "POST") :
    if (!$class->empty_filed($email)):
        $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
        $true = FALSE;
    endif;
    if (!$class->empty_filed($Password)):
        $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك حقل فارغ</div>";
        $true = FALSE;
    endif;
    try {
        $sql = "SELECT * FROM registration  WHERE email=? AND  Password=? ";
        $query = $Data_communication->prepare($sql);
        $query->execute(array($email, $Password));
        if ($query->rowCount() >= 1) {
            $_SESSION['user'] = $email;
            $_SESSION['has'] = $session->hash($email);
            $_SESSION['time_start_login'] = time();   
            echo '<script>window.location.href = "options.php";</script>';
            exit();
        } else {
            
        }
    } catch (Exception $ex) {
        echo $ex;
        $Data_communication = null;
    } finally {
        $Data_communication = null;
    }    
   endif;
