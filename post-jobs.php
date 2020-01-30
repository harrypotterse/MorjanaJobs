<?php
#=================================================================================
#===========================  تصمين الملفات==========================================
require_once './Classes/Session.php';
require_once './FileConnection/Data_connection.php';
require_once './FileConnection/Extra_functions.php';
require_once './Classes/Achieve.php';
require_once './Classes/Component.php';
require_once './Classes/Session.php';
include('./Classes/simple_html_dom.php');
#=================================================================================
$Component = new Component();
$class = new Achieve();
$session = new Session("login.php");
$session->logout("logout");
$user = $session->get_session_data("user");
$Full_user = sql_feth($Data_communication, array($user));
$Page_user = password_hash("cv", PASSWORD_DEFAULT);
$id_user = sql_feth_id($Data_communication, array($user));
#===========================  تعريف الكلاسات==========================================
#=================================================================================
$fotter = $Component->fetchObject_SQL($Data_communication, "SELECT * FROM `page_components` where id = 1");
$settings = $Component->fetchObject_SQL($Data_communication, "SELECT * FROM `settings`");
require_once './app/post-jobs.php';
?>
<!DOCTYPE html>
<html lang="en">
    <?php require_once './site_components/head.php'; ?>
    <body id="bg">
        <div class="page-wraper">
            <div id="loading-area"></div>
            <!-- header -->
            <?php require_once './site_components/header.php'; ?>
            <!-- Content -->
            <div class="page-content bg-white">
                <!-- contact area -->
                <?php require_once './software_components/content_block.php'; ?>
            </div>
            <!-- Content END-->
            <!-- Modal Box -->
            <?php require_once './software_components/modal_post_jobs.php'; ?>
            <!-- Modal Box End -->
            <!-- Modal Box End -->
         
            <!-- Footer -->
            <?php require_once './site_components/footer.php'; ?>
            <button class="scroltop fa fa-chevron-up"></button>
        </div>
        <!-- JAVASCRIPT FILES ========================================= -->
        <!-- JAVASCRIPT FILES ========================================= -->
        <?php require_once './site_components/js.php'; ?>
        <?php require_once './site_components/js_post_jobs.php'; ?>
    </body>
</html>