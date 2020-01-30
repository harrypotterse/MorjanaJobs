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
            <!-- header END -->
                      <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(images/banner/bnr1.jpg);">
                    <div class="container">
                        <div class="dez-bnr-inr-entry">
                            <h1 class="text-white">التسجيل</h1>
                            <!-- Breadcrumb row -->
                            <div class="breadcrumb-row">
                                <ul class="list-inline">
                                    <li><a href="#">الرئيسية</a></li>
                                    <li>التسجيل</li>
                                </ul>
                            </div>
                            <!-- Breadcrumb row END -->
                        </div>
                    </div>
                </div>
                <!-- inner page banner END -->
                <!-- contact area -->
                <?php require_once './software_components/shop_account.php'; ?>
                <!-- contact area  END -->
         
            <!-- Content END-->
            <div class="modal fade lead-form-modal" id="car-details" tabindex="-1" role="dialog" >
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="modal-body row m-a0 clearfix">
                            <div class="col-lg-6 col-md-6 overlay-primary-dark d-flex p-a0" style="background-image:url(images/background/bg2.jpg);  background-position:center; background-size:cover;">
                                <div class="form-info text-white align-self-center">
                                    <h3 class="m-b15">الدخول</h3>
                                    <p class="m-b15">فقط قم بملأ البيانات وسجل معنا حتي تتواصل مع أصحاب الوظائف الشاغرة..</p>
                                    <ul class="list-inline m-a0">
                                        <li><a href="#" class="m-r10 text-white"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" class="m-r10 text-white"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#" class="m-r10 text-white"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#" class="m-r10 text-white"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#" class="m-r10 text-white"><i class="fa fa-twitter"></i></a></li>
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
            <!-- Modal Box End -->
           <?php require_once './software_components/model_box.php'; ?>
            <!-- Footer -->
         <?php require_once './site_components/footer.php'; ?>
            <button class="scroltop fa fa-chevron-up" ></button>
        </div>
        <!-- JAVASCRIPT FILES ========================================= -->
     <?php require_once './site_components/js.php'; ?>
        <script src="Development/register.js" type="text/javascript"></script>
    </body>
</html>