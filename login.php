<?php
#=================================================================================
#===========================  تصمين الملفات==========================================
require_once './FileConnection/Data_connection.php';
require_once './Classes/Achieve.php';
require_once './Classes/Component.php';
require_once './Classes/Session.php';
include('./Classes/simple_html_dom.php');
#=================================================================================
$session = new Session("login.php");
$session->logout("logout");
$user = $session->get_session_data("user");
#===========================  تعريف الكلاسات==========================================
$class = new Achieve();
$Component = new Component();
#=================================================================================
$login = $Component->fetchObject_SQL($Data_communication, "SELECT * FROM `page_components` where id = 6");
$settings = $Component->fetchObject_SQL($Data_communication, "SELECT * FROM `settings`");

?>
<!DOCTYPE html>
<html lang="en">
    <?php require_once './site_components/head.php'; ?>
    <body id="bg">
        <div class="page-wraper">
            <div id="loading-area"></div>
            <!-- Content -->
            <div class="page-content bg-gray login-form-bx browse-job login-style2">
                <div class="section-full">
                    <!-- Login Page -->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6 col-md-7 box-skew d-flex">
                                <div class="login-2 p-a30 seth d-flex align-self-center m-auto wow fadeInLeft" data-wow-delay="0.8s">
                                    <div class="tab-content nav">
                                        <?php require_once './software_components/form_login.php'; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-5 d-flex box-skew1">
                                <div class="text-white max-w400 align-self-center">
                                    <div class="logo">
                                        <a href="index.php"><img src="images/logo.png" alt=""></a>
                                    </div>
                                    <h2 class="m-b10"><?php echo $login->statement1; ?></h2>
                                    <p class="m-b30"><?php echo $login->statement2; ?></p>
                                    <ul class="list-inline m-a0">
                                        <li><a href="<?php echo $login->statement3; ?>" class="m-r10 text-white"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="<?php echo $login->statement4; ?>" class="m-r10 text-white"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="<?php echo $login->statement5; ?>" class="m-r10 text-white"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="<?php echo $login->statement6; ?>" class="m-r10 text-white"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="<?php echo $login->statement7; ?>" class="m-r10 text-white"><i class="fa fa-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Login Page END -->
                </div>
                <?php require_once './site_components/footer_login.php'; ?>
            </div>
            <!-- Content END -->
            <button class="scroltop fa fa-chevron-up" ></button>
        </div>
        <!-- JAVASCRIPT FILES ========================================= -->
        <?php require_once './site_components/js.php'; ?>
        <script src="Development/login.js" type="text/javascript"></script>
    </body>
</html>