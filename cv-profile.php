<?php
require_once './FileConnection/Data_connection.php';
require_once './FileConnection/Extra_functions.php';
require_once './Classes/Session.php';
require_once './Classes/Achieve.php';
require_once './Classes/Component.php';
//=======================class==================================
$Component = new Component();
$session = new Session("login.php");
$class = new Achieve();
//=======================$session==================================
$session->logout("logout");
$user = $session->get_session_data("user");
$Full_user = sql_feth($Data_communication, array($user));
$Page_user = password_hash("cv", PASSWORD_DEFAULT);
$id_user = sql_feth_id($Data_communication, array($user));
$id_session = $session->get_session_data("id");
//=========================================================
$fotter = $Component->fetchObject_SQL($Data_communication, "SELECT * FROM `page_components` where id = 1");
$settings = $Component->fetchObject_SQL($Data_communication, "SELECT * FROM `settings`");
//=======================PHPMailer==================================
$pag = "cv";
$Page = $_GET['Page'];
$msg = true;
$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
if (!password_verify($pag, $Page)) {
    $msg = FALSE;
    header('Location: index.php');
    exit();
}
if (empty($id)) {
    $msg = FALSE;
    header('Location: index.php');
    exit();
} elseif (empty($Page)) {
    $msg = FALSE;
    header('Location: index.php');
    exit();
}
if (is_int($id)):
    $msg = FALSE;
    header('Location: index.php');
    exit();
endif;
if ($msg = TRUE):
    $query = "select * from  cv  where id = ? ";
    $array = array($id);
    $rows = $class->sql_feth($Data_communication, $query, $array);
    if (count($rows) > 0) :
        $a = 0;
        foreach ($rows as $value):
            $a++;
            $id = $value['id'];
            $Name = $value['Name'];
            $Age = $value['Age'];
            $mobile = $value['mobile'];
            $Mail = $value['Mail'];
            $Country = $value['Country'];
            $City = $value['City'];
            $Degree = $value['Degree'];
            $College = $value['College'];
            $Function = $value['Function'];
            $Specialty = $value['Specialty'];
            $Description = $value['Description'];
            $Date = $value['Date'];
            $day = $value['day'];
            $Month = $value['Month'];
            $Files = $value['Files'];
            $Acceptance = $value['Acceptance'];
            $user = $value['user'];
            $Ranking = $value['Ranking'];
            $Views = $value['Views'] + $a;
            $sql = "UPDATE `cv` SET `Views` = ?  WHERE `cv`.`id` = ?;";
            $array = array($Views, $id);
            $class->sql($Data_communication, $sql, $array);
        endforeach;
    endif;
endif;
?>
<!DOCTYPE html>
<html lang="en">
    <?php require_once './site_components/head.php'; ?>

    <body id="bg">
        <div class="page-wraper">
            <div id="loading-area"></div>
            <!-- header -->
            <?php require_once './site_components/header.php'; ?>
            <!-- header END -->
            <!-- Content -->
            <div class="page-content">
                <!-- inner page banner -->
                <div class="profile-edit p-t50 p-b20">
                    <div class="container">
                        <div class="row">
                            <?php require_once './software_components/candidate-info.php'; ?>
                        </div>
                        <?php // require_once './software_components/job_bx.php'; ?>
                        <?php require_once './software_components/profile_summary_bx.php'; ?>
                    </div>
                    <!-- Modal -->
                    <?php require_once './software_components/profilename.php'; ?>
                    <!-- Modal End -->

                    <?php require_once './software_components/attach_resume_bx.php'; ?>
                </div>
                <!-- inner page banner END -->
                <!--                <div class="text-center">
                                    <div class="container">
                                        <button type="button" class="site-button m-b30">حفظ </button>
                                    </div>
                                </div>-->
                <!-- Modal Box End -->
                <!-- Footer -->
                <?php require_once './site_components/footer.php'; ?>
                <!-- Footer END -->
                <button class="scroltop fa fa-chevron-up"></button>
            </div>
            <!-- JAVASCRIPT FILES ========================================= -->
            <?php require_once './site_components/js.php'; ?>
            <script src="Development/cv-profile.js" type="text/javascript"></script>
            <script>
                $(function () {
                    var data = [
                        'css',
                        'html',
                        'php',
                        'jquery'
                    ];
                    $(".tags_input").tagComplete({
                        keylimit: 1,
                        hide: false,
                        autocomplete: {
                            data: data
                        }
                    });
                });
                jQuery(document).ready(function () {
                    jQuery('.nav-link').on('click', function () {
                        jQuery('.nav-link').removeClass('active');
                        jQuery(this).addClass('active');
                    });
                });
            </script>
    </body>
    <!-- Mirrored from job-board.dexignzone.com/xhtml-rtl/jobs-my-resume.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Mar 2019 22:29:27 GMT -->
</html>