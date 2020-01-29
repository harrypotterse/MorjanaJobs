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
#=================================================================================
$fotter = $Component->fetchObject_SQL($Data_communication, "SELECT * FROM `page_components` where id = 1");
$about = $Component->fetchObject_SQL($Data_communication, "SELECT * FROM `page_components` where id = 5");
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
                <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(images/banner/bnr1.jpg);">
                    <div class="container">
                        <div class="dez-bnr-inr-entry">
                            <h1 class="text-white">عن الموقع</h1>
                            <!-- Breadcrumb row -->
                            <div class="breadcrumb-row">
                                <ul class="list-inline">
                                    <li><a href="#">الرئيسية</a></li>
                                    <li>عن الموقع</li>
                                </ul>
                            </div>
                            <!-- Breadcrumb row END -->
                        </div>
                    </div>
                </div>
                <!-- Content -->
                <!-- Section Banner -->
                <!-- inner page banner END -->
                <div class="content-block">
                    <div class="section-full content-inner overlay-white-middle">
                        <div class="container">
                            <div class="row align-items-center m-b50">
                                <div class="col-md-12 col-lg-6 m-b20">
                                    <h2 class="m-b5"><?php echo $about->statement1; ?></h2>
                                    <h3 class="fw4"><?php echo $about->statement2; ?></h3>
                                    <p class="m-b15"><?php echo $about->statement3; ?></p>
                                    <a href="about.php" class="site-button">للمزيد</a>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <img src="<?php echo $about->statement4; ?>" alt=""/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12 m-b30">
                                    <div class="icon-bx-wraper p-a30 center bg-gray radius-sm">
                                        <div class=" text-primary m-b20"> <a href="#" ><img src="<?php echo $about->statement5; ?>" alt="morjana" /></a> </div>
                                        <div class="icon-content">
                                            <h5 class="dlab-tilte text-uppercase"><?php echo $about->statement6; ?>
                                            </h5>
                                            <p><?php echo $about->statement7; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 m-b30">
                                    <div class="icon-bx-wraper p-a30 center bg-gray radius-sm">
                                        <div class="text-primary m-b20"> <a href="#" class="icon-cell text-primary"><img src="<?php echo $about->statement8; ?>" alt="morjana" /></a> </div>
                                        <div class="icon-content">
                                            <h5 class="dlab-tilte text-uppercase"><?php echo $about->statement9; ?>
                                            </h5>
                                            <p><?php echo $about->statement10; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 m-b30">
                                    <div class="icon-bx-wraper p-a30 center bg-gray radius-sm">
                                        <div class="text-primary m-b20"> <a href="#" class="icon-cell text-primary"><img src="<?php echo $about->statement11; ?>" alt="morjana" /></a> </div>
                                        <div class="icon-content">
                                            <h5 class="dlab-tilte text-uppercase"><?php echo $about->statement12; ?></h5>
                                            <p><?php echo $about->statement13; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Why Chose Us -->
                    <!-- Call To Action -->
                    <div class="section-full content-inner-2 call-to-action overlay-black-dark text-white text-center bg-img-fix" style="background-image:url(images/background/bg4.jpg);">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2 class="m-b10"><?php echo $about->statement14; ?>
                                    </h2>
                                    <p class="m-b0"><?php echo $about->statement15; ?></p>
                                    <a href="register.php" class="site-button m-t20 outline outline-2 radius-xl"><?php echo $about->statement16; ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Call To Action END -->
            <!-- Modal Box -->
            <div class="modal fade lead-form-modal" id="car-details" tabindex="-1" role="dialog" >
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="modal-body row m-a0 clearfix">
                            <div class="col-lg-6 col-md-6 overlay-primary-dark d-flex p-a0" style="background-image:url(images/background/bg3.jpg);  background-position:center; background-size:cover;">
                                <div class="form-info text-white align-self-center">
                                    <h3 class="m-b15">الدخول</h3>
                                    <p class="m-b15">فقط قم بملأ البيانات وسجل معنا حتي تتواصل مع أصحاب الوظائف الشاغرة..</p>
                                    <ul class="list-inline m-a0">
                                        <li><a href="<?php echo $about->statement17; ?>" class="m-r10 text-white"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="<?php echo $about->statement18; ?>" class="m-r10 text-white"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="<?php echo $about->statement19; ?>" class="m-r10 text-white"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="<?php echo $about->statement20; ?>" class="m-r10 text-white"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="<?php echo $about->statement21; ?>" class="m-r10 text-white"><i class="fa fa-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 p-a0">
                                <div class="lead-form browse-job text-left">
                                    <form>
                                        <h3 class="m-t0">المعلومات المطلوبة</h3>
                                        <div class="form-group">
                                            <input value="" class="form-control" placeholder="الأسم"/>
                                        </div>	
                                        <div class="form-group">
                                            <input value="" class="form-control" placeholder="الايميل"/>
                                        </div>
                                        <div class="clearfix">
                                            <button type="button" class="btn-primary site-button btn-block">تسجيل </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>	
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <!-- Modal Box End -->
            <?php
            echo googel_ads($Data_communication, "contact", "Bottom");
            ?>
            <!-- Footer -->
            <?php require_once './site_components/footer.php'; ?>         
            <!-- Footer END -->
            <button class="scroltop fa fa-chevron-up" ></button>
            <!-- JAVASCRIPT FILES ========================================= -->
            <?php require_once './site_components/js.php'; ?>
    </body>
</html>