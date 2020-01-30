<?php
#=================================================================================
#===========================  تصمين الملفات==========================================
require_once './FileConnection/Data_connection.php';
require_once './Classes/Achieve.php';
require_once './Classes/Component.php';
require_once './Classes/Session.php';
require_once './FileConnection/Extra_functions.php';
include('./Classes/simple_html_dom.php');
#=================================================================================
$session = new Session("login.php");
$session->logout("logout");
$user = $session->get_session_data("user");
$Full_user = sql_feth($Data_communication, array($user));
$Page_user = password_hash("cv", PASSWORD_DEFAULT);
$id_user = sql_feth_id($Data_communication, array($user));
#===========================  تعريف الكلاسات==========================================
$class = new Achieve();
$Component = new Component();
#=================================================================================
$fotter = $Component->fetchObject_SQL($Data_communication, "SELECT * FROM `page_components` where id = 1");
$settings = $Component->fetchObject_SQL($Data_communication, "SELECT * FROM `settings`");
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
            <div class="page-content bg-white">
                <!-- inner page banner -->
                <?php require_once './software_components/banner_jobs.php'; ?>
                <!-- Content -->
                <!-- Section Banner -->
                <div class="google-ads">
                    <div class="container">
                        <div class="row">
                            <img src="images/google-ads.png" />
                        </div>
                    </div>
                </div>
                <!-- inner page banner END -->
                <!-- About Us -->
                <?php require_once './software_components/job-categories.php'; ?>
                <!-- About Us END -->
                <!-- Modal Box End -->
                <div class="google-ads">
                    <div class="container">
                        <div class="row">
                            <img src="images/google-ads.png" />
                        </div>
                    </div>
                </div>
                <!-- Footer -->
                <?php require_once './site_components/footer.php'; ?>
                <!-- Footer END -->
                <!-- scroll top button -->
                <button class="scroltop fa fa-arrow-up" ></button>
            </div>
            <!-- JAVASCRIPT FILES ========================================= -->
        <?php require_once './site_components/js.php'; ?>
    </body>
</html>