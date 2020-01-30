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
$id_setion = $session->set_session_data("id", $id_user);
$affiliate = $Component->fetchObject_SQL($Data_communication, "SELECT * FROM `affiliate`");
require_once './app/index.php';
#=================================================================================
$fotter = $Component->fetchObject_SQL($Data_communication, "SELECT * FROM `page_components` where id = 1");
$about = $Component->fetchObject_SQL($Data_communication, "SELECT * FROM `page_components` where id = 5");
$settings = $Component->fetchObject_SQL($Data_communication, "SELECT * FROM `settings`");
$pag = "job";
$Page = $_GET['Page'];
$msg = true;
$id__ = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
if (!password_verify($pag, $Page)) {
    $msg = FALSE;
    header('Location: index.php');
    exit();
}
if (empty($_GET['id'])) {
    header('Location: index.php');
    exit();
} elseif (empty($_GET['Page'])) {
    header('Location: index.php');
    exit();
}
if (is_int($_GET['id'])):
    header('Location: index.php');
    exit();
endif;

if ($msg = TRUE):
    $query = "select * from  job  where id =  ? ";
    $array = array($id__);
    $rows = $class->sql_feth($Data_communication, $query, $array);
    if (count($rows) > 0) :
        foreach ($rows as $value):
            $id = $value['id'];
            $Title = $value['Title'];
            $Company = $value['Company'];
            $Keywords = $value['Keywords'];
            $Minimum = $value['Minimum'];
            $Maximum = $value['Maximum'];
            $specialty = $value['specialty'];
            $Email = $value['Email'];
            $Country = $value['Country'];
            $City = $value['City'];
            $Date = $value['Date'];
            $Today = $value['Today'];
            $Month = $value['Month'];
            $File = $value['File'];
            $User_type = $value['User_type'];
            $Views = $value['Views'];
            $Acceptance = $value['Acceptance'];
            $url = $value['url'];
            $id_user = $value['id_user'];
            $Ranking = $value['Ranking'];
            $bayt = $value['bayt'];

            $array_keyword = explode(",", $Keywords);

        endforeach;
    endif;
    ?>

    <!DOCTYPE html>
    <html lang="en">
        <?php require_once './site_components/head.php'; ?>
        <body id="bg">
            <div class="page-wraper">
                <div id="loading-area"></div>
                <!-- header -->
                <?php require_once './site_components/header.php'; ?>
                <style>
                    tr#col {
                        background: #307ad2;
                        color: white;
                        border: none;
                        font-size: 16px;
                    }
                    .table-bordered td, .table-bordered th {
                        border: none;
                    }
                    table.table.table-bordered {
                        background: #f1f1f1;
                    }

                    [dir$="ltr"] >ul {
                        /* background: #ffff00; */
                        direction: rtl;
                        background: #157efb;
                        color: white;
                        padding: 1.1%;
                    }
                    .media.m40t {
                        display: none;
                    }
                    h2.h6 {
                        font-size: 125%;
                        color: #157efb;
                        font-weight: 600;
                    }
                    dl.dlist.is-spaced.is-fitted.t-small.m0 {
                        background: #157efb;
                        padding: 1.1%;
                        color: white;
                    }
                    p.t-small {
                        background: #157efb;
                        color: white;
                        padding: 10.1px;
                        text-align: justify;
                    }
                    span.ltr {
                        text-align: right;
                        background: #157efb;
                        color: white;
                        padding: 1.1%;
                    }

                </style>
                <!-- header END -->
                <!-- Content -->
                <div class="page-content">
                    <!-- inner page banner -->
                    <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(images/banner/bnr1.jpg);">
                        <div class="container">
                            <div class="dez-bnr-inr-entry">
                                <h1 class="text-white">تفاصيل الوظيفة</h1>
                                <!-- Breadcrumb row -->
                                <div class="breadcrumb-row">
                                    <ul class="list-inline">
                                        <li><a href="job-list.php">الرئسية</a></li>
                                        <li>تفاصيل الوظيفة</li>
                                    </ul>
                                </div>
                                <!-- Breadcrumb row END -->
                            </div>
                        </div>
                    </div>
                    <!-- inner page banner END -->
                    <!-- Error Page -->
                    <div class="container">
                        <img src="<?php echo $url; ?>" width="30%" class="img-responsive">
                        <h2><?php echo $Title; ?></h2> 
                        <div>
                            <?php
                            echo $bayt
                            ?>
                            <br>
                              <br>
                              
                            <a href="redirect.php" class="site-button">سجل سيرتك من هنا</a>
                        </div>
                    </div>

                    <!-- Error Page END -->
                </div>


                <?php require_once './software_components/model_box.php'; ?>
                <!-- Footer -->
                <?php require_once './site_components/footer.php'; ?>
                <!-- Footer END -->
                <button class="scroltop fa fa-chevron-up" ></button>
            </div>
            <!-- JAVASCRIPT FILES ========================================= -->
            <?php require_once './site_components/js.php'; ?>
        </body>
    </html>
    <?php
endif;
?>