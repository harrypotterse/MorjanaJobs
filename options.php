<?php
#=================================================================================
#===========================  تصمين الملفات==========================================
require_once './FileConnection/Data_connection.php';
require_once './Classes/Achieve.php';
require_once './Classes/Session.php';
require_once './Classes/Component.php';
require_once './FileConnection/Extra_functions.php';
#=================================================================================
#===========================  تعريف الكلاسات==========================================
$class = new Achieve();
$Component = new Component();
$session = new Session("login.php");
$session->logout("logout");
$user = $session->get_session_data("user");
$Full_user = sql_feth($Data_communication, array($user));
$Page_user = password_hash("cv", PASSWORD_DEFAULT);
$id_user = sql_feth_id($Data_communication, array($user));
$id_setion=$session->set_session_data("id", $id_user);
#===========================  تعريف الكلاسات==========================================
$options = $Component->fetchObject_SQL($Data_communication, "SELECT * FROM `page_components` where id = 4");
$settings = $Component->fetchObject_SQL($Data_communication, "SELECT * FROM `settings`");
//====================================================================================
?>
<!DOCTYPE html>
<html lang="en">
    <!-- Mirrored from job-board.dexignzone.com/xhtml-rtl/login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Mar 2019 22:31:35 GMT -->
    <?php require_once './site_components/head.php'; ?>
    <body id="bg">
        <div class="page-wraper">
            <div id="loading-area"></div>
            <!-- Content -->
            <div class="page-content bg-white login-style2" style="background-image:url(images/background/bg6.jpg); background-size: cover;">
                <div class="section-full">
                    <!-- Login Page -->
                    <?php require_once './software_components/login_page.php'; ?>
                    <!-- Login Page END -->
                </div>
                <footer class="login-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <span> <?php echo $options->statement8; ?><i class="fa fa-heart m-lr5 text-red heart"></i>
                                    <a href="javascript:void(0);"><?php echo $options->statement9; ?> </a><?php echo $options->statement10; ?></span> 
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- Content END -->
            <button class="scroltop fa fa-chevron-up" ></button>
        </div>
        <!-- JAVASCRIPT FILES ========================================= -->
        <?php require_once './site_components/js.php'; ?>
    </body>
</html>