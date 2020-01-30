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
#=================================================================================
#===========================  تعريف الكلاسات==========================================
$fotter = $Component->fetchObject_SQL($Data_communication, "SELECT * FROM `page_components` where id = 1");
$settings = $Component->fetchObject_SQL($Data_communication, "SELECT * FROM `settings`");
?>
<!DOCTYPE php>
<php lang="en">
    <?php require_once './site_components/head.php'; ?>
    <body id="bg">
        <div class="page-wraper">
            <div id="loading-area"></div>
            <!-- header -->
            <?php require_once './site_components/header.php'; ?>
            <!-- header END -->
            <!-- Content -->
            <div class="page-content bg-white">
                <!-- contact area -->
                <div class="content-block">
                    <!-- Browse Jobs -->
                    <div class="section-full bg-white browse-job p-t50 p-b20">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-9 col-lg-8 m-b30">
                                    <div class="job-bx job-profile">
                                        <div class="job-bx-title clearfix">
                                            <h5 class="font-weight-700 pull-left text-uppercase">اهم المعلومات</h5>
                                            <a href="index.php" class="site-button right-arrow button-sm float-right">رجوع للرئيسية</a>
                                        </div>
                                        <?php require_once './software_components/form_emploee.php'; ?>
                                    </div>    
                                </div>
                                <div class="col-xl-3 col-lg-4 m-b30">
                                    <?php echo googel_ads($Data_communication, "emploee-profile", "side1"); ?>
                                    <?php echo googel_ads($Data_communication, "emploee-profile", "side2"); ?>    
                                </div>
                            </div>
                        </div>
                    </div>
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
</php>