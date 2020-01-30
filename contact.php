<?php
#=================================================================================
#===========================  تصمين الملفات==========================================
require_once './FileConnection/Data_connection.php';
require_once './Classes/Achieve.php';
require_once './Classes/Component.php';
require_once './FileConnection/Extra_functions.php';
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
require_once './app/contact.php';
#=================================================================================
#===========================  تعريف الكلاسات==========================================
$fotter = $Component->fetchObject_SQL($Data_communication, "SELECT * FROM `page_components` where id = 1");
$Communication = $Component->fetchObject_SQL($Data_communication, "SELECT * FROM `page_components` where id = 2");
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
                <?php require_once './software_components/contact_banner.php'; ?>
                <!-- inner page banner END -->
                <!-- contact area -->
                <div class="section-full content-inner bg-white contact-style-1">
                    <div class="container">
                        <div class="row">
                            <!-- right part start -->
                            <?php require_once './software_components/info_contact.php'; ?>
                            <!-- right part END -->
                            <!-- Left part start -->
                            <div class="col-lg-6 col-md-6">
                                <div class="p-a30 m-b30 radius-sm bg-gray clearfix">
                                    <h4>ارسل رسالتك </h4>
                                    <div class="dzFormMsg"></div>
                                    <?php require_once './software_components/form_contact.php'; ?>
                                </div>
                            </div>
                            <!-- Left part END -->
                        </div>
                    </div>
                </div>
                <!-- contact area  END -->
            </div>
            <!-- Content END-->
            <!-- Modal Box End -->
            <?php require_once './software_components/model_box.php'; ?>
            <!-- Footer -->
            <?php
            echo googel_ads($Data_communication, "contact", "Bottom");
            ?>
            <?php require_once './site_components/footer.php'; ?>
            <!-- scroll top button -->
            <button class="scroltop fa fa-chevron-up" ></button>
        </div>
        <!-- JAVASCRIPT FILES ========================================= -->
        <?php require_once './site_components/js.php'; ?>
    </body>
</html>