<?php
#=================================================================================
#===========================  تصمين الملفات==========================================
require_once './FileConnection/Data_connection.php';
require_once './Classes/Achieve.php';
require_once './Classes/Component.php';
require_once './Classes/Session.php';
require_once './FileConnection/Extra_functions.php';
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
            <!-- header END -->
            <!-- Content -->
            <div class="page-content bg-white">
                <!-- contact area -->
                <div class="content-block">
                    <!-- Browse Jobs -->
                    <?php require_once './software_components/browse_jobs.php'; ?>
                    <!-- Browse Jobs END -->
                </div>
            </div>
            <!-- Content END-->
            <!-- Modal Box End -->
            <?php require_once './software_components/model_box.php'; ?>
            <!-- Footer -->
           <?php require_once './site_components/footer.php'; ?>
            <!-- Footer END -->
            <button class="scroltop fa fa-chevron-up"></button>
        </div>
        <!-- JAVASCRIPT FILES ========================================= -->
  <?php require_once './site_components/js.php'; ?>
    </body>
</html>