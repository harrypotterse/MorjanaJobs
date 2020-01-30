<?php
#=================================================================================
#===========================  تصمين الملفات==========================================
require_once './FileConnection/Extra_functions.php';
require_once './Classes/Session.php';
require_once './FileConnection/Data_connection.php';
require_once './Classes/Achieve.php';
require_once './Classes/Component.php';
require_once './Classes/pagination.php';
require_once './Classes/Plurality.php';
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
$about = $Component->fetchObject_SQL($Data_communication, "SELECT * FROM `page_components` where id = 5");
$settings = $Component->fetchObject_SQL($Data_communication, "SELECT * FROM `settings`");
$affiliate = $Component->fetchObject_SQL($Data_communication, "SELECT * FROM `affiliate`");
require_once 'app/job-list.php';
//=======================PHPMailer==================================
define("ROW_PER_PAGE", 60);
?>
<!DOCTYPE html>
<html lang="en">
    <?php require_once './site_components/head.php'; ?>
    <style>
        .tbl-qa{width: 100%;font-size:0.9em;background-color: #f5f5f5;}
        .tbl-qa th.table-header {padding: 5px;text-align: left;padding:10px;}
        .tbl-qa .table-row td {padding:10px;background-color: #FDFDFD;vertical-align:top;}
        .button_link {color:#FFF;text-decoration:none; background-color:#428a8e;padding:10px;}
        #keyword{border: #CCC 1px solid; border-radius: 4px; padding: 7px;background:url("demo-search-icon.png") no-repeat center right 7px;}
        .btn-page{margin-right:10px;padding:5px 10px; border: #CCC 1px solid; background:#FFF; border-radius:4px;cursor:pointer;}
        .btn-page:hover{background:#F0F0F0;}
        .btn-page.current{background:#F0F0F0;}
    </style>
    <body id="bg">
        <div class="page-wraper">
            <div id="loading-area"></div>
            <!-- header -->
            <?php require_once './site_components/header.php'; ?>
            <!-- header END -->
            <!-- Content -->
            <div class="page-content bg-white">
                <!-- inner page banner -->
                <?php require_once './software_components/banner_job_list.php'; ?>
                <!-- inner page banner END -->
                <!-- Filters Search -->
                <?php require_once './software_components/filters_search.php'; ?>
                <!-- Filters Search END -->
                <!-- contact area -->
                <?php require_once './software_components/contact_area.php'; ?>
            </div>
            <!-- Content END-->
            <!-- Modal Box End -->
            <!-- Footer -->
            <?php require_once './site_components/footer.php'; ?>
            <!-- Footer END -->
            <button class="scroltop fa fa-chevron-up"></button>
        </div>
        <!-- JAVASCRIPT FILES ========================================= -->
        <?php require_once './site_components/js.php'; ?>
        <script>
            $(document).ready(function () {
                $(".Title ").click(function () {
                    var sec = $(this).attr('id');
                    $.post('app/count.php', {sec: sec}, function (data) {
                    });
                });
            });
        </script>
    </body>
</html>