<?php
#=================================================================================
#===========================  تصمين الملفات==========================================
require_once './FileConnection/Data_connection.php';
require_once './FileConnection/Extra_functions.php';
require_once './Classes/Achieve.php';
require_once './Classes/Component.php';
require_once './Classes/Session.php';
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
require_once 'app/rules.php';
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
                <?php require_once './software_components/banner_rules.php'; ?>
                <!-- Content -->
                <!-- Section Banner -->
                <?php require_once './software_components/Section_rules.php'; ?>
            </div>
            <!-- Content END-->
            <!-- Modal Box End -->
            <?php require_once './software_components/model_box.php'; ?>
            <?php   echo googel_ads($Data_communication, "rules", "Bottom"); ?>
            <!-- Footer -->
            <?php require_once './site_components/footer.php'; ?>
            <!-- Footer END -->
            <button class="scroltop fa fa-chevron-up" ></button>
        </div>
        <!-- JAVASCRIPT FILES ========================================= -->
        <?php require_once './site_components/js.php'; ?>
    </body>
    <!-- Mirrored from job-board.dexignzone.com/xhtml-rtl/error-404.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Mar 2019 22:31:44 GMT -->
</html>