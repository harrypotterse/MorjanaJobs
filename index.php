<?php
#=================================================================================
#function all_file($path){
#===========================  تصمين الملفات==========================================
require_once './Classes/Session.php';
require_once './FileConnection/Data_connection.php';
require_once './Classes/Achieve.php';
require_once './Classes/Component.php';
require_once './FileConnection/Extra_functions.php';
include('./Classes/simple_html_dom.php');
#===========================  تعريف الكلاسات==========================================
$class = new Achieve();
$Component = new Component();
//=======================PHPMailer==================================
$session = new Session("login.php");
$session->logout("logout");
$user = $session->get_session_data("user");
$Full_user = sql_feth($Data_communication, array($user));
$Page_user = password_hash("cv", PASSWORD_DEFAULT);
$id_user = sql_feth_id($Data_communication, array($user));
$id_setion=$session->set_session_data("id", $id_user);
$affiliate = $Component->fetchObject_SQL($Data_communication, "SELECT * FROM `affiliate`");
require_once './app/index.php';
#=================================================================================
$fotter = $Component->fetchObject_SQL($Data_communication, "SELECT * FROM `page_components` where id = 1");
$about = $Component->fetchObject_SQL($Data_communication, "SELECT * FROM `page_components` where id = 5");
$settings = $Component->fetchObject_SQL($Data_communication, "SELECT * FROM `settings`");
?>
<!DOCTYPE html>
<html lang="en">
    <?php require_once './site_components/head.php'; ?>
    <body id="bg">
        <div id="loading-area"></div>
        <div class="page-wraper">
            <!-- header -->
            <?php require_once './site_components/header.php'; ?>
            <!-- header END -->
            <!-- Content -->
            <div class="page-content">
                <!-- Section Banner -->
                <?php require_once './software_components/overlay.php'; ?>
                <?php
                $query = "select * from  googel_ads  where Page= 'index' and Location= 'Upper'  ";
                $array = array();
                $rows = $class->sql_feth($Data_communication, $query, $array);
                if (count($rows) > 0) :
                    foreach ($rows as $value):
                        $id = $value['id'];
                        echo $ads = $value['ads'];
                        $Page = $value['Page'];
                        $Location = $value['Location'];
                    endforeach;
                endif;
                ?>
                <!-- inner page banner END -->
                <?php require_once './software_components/about_the_site.php'; ?>
                <!-- Call To Action END -->
                <!-- About Us -->
                <?php require_once './software_components/about_us.php'; ?>
                <!-- About Us END -->
                <!-- Call To Action -->
                <?php require_once './software_components/action.php'; ?>
                <!-- Call To Action END -->
                <!-- Our Job -->
                <?php require_once './software_components/Our_Job.php'; ?>
                <!-- Our Job END -->	
                <!-- Call To Action -->
                <?php require_once './software_components/Call_To.php'; ?>
                <!-- Call To Action END -->
                <!-- Our Latest Blog -->
            </div>
            <!-- Content END-->
            <!-- Modal Box End -->
            <?php
            $query = "select * from  googel_ads  where Page= 'index' and Location= 'Bottom'  ";
            $array = array();
            $rows = $class->sql_feth($Data_communication, $query, $array);
            if (count($rows) > 0) :
                foreach ($rows as $value):
                    $id = $value['id'];
                    echo $ads = $value['ads'];
                    $Page = $value['Page'];
                    $Location = $value['Location'];
                endforeach;
            endif;
            ?>
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