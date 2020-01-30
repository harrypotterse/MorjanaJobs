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
$affiliate = $Component->fetchObject_SQL($Data_communication, "SELECT * FROM `affiliate`");
?>
<!DOCTYPE html>
<html lang="en">
    <?php require_once './site_components/head.php'; ?>
    <body id="bg">
        <div class="page-wraper">
            <div id="loading-area"></div>
            <!-- header -->
            <!-- header END -->
            <!-- Content -->
            <div class="page-content">
                <!-- inner page banner -->

                <!-- inner page banner END -->
                <!-- Error Page -->
                <div class="section-full content-inner-3 bg-white" style="
                     margin-top: -7%;
                     ">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 error-page text-center">
                                <p>
                                    <svg class="lds-blocks" width="200px"  height="200px"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" style="background: none;"><rect x="19" y="19" width="20" height="20" fill="#157efb">
                                    <animate attributeName="fill" values="#1959a5;#157efb;#157efb" keyTimes="0;0.125;1" dur="1.9s" repeatCount="indefinite" begin="0s" calcMode="discrete"></animate>
                                    </rect><rect x="40" y="19" width="20" height="20" fill="#157efb">
                                    <animate attributeName="fill" values="#1959a5;#157efb;#157efb" keyTimes="0;0.125;1" dur="1.9s" repeatCount="indefinite" begin="0.2375s" calcMode="discrete"></animate>
                                    </rect><rect x="61" y="19" width="20" height="20" fill="#157efb">
                                    <animate attributeName="fill" values="#1959a5;#157efb;#157efb" keyTimes="0;0.125;1" dur="1.9s" repeatCount="indefinite" begin="0.475s" calcMode="discrete"></animate>
                                    </rect><rect x="19" y="40" width="20" height="20" fill="#157efb">
                                    <animate attributeName="fill" values="#1959a5;#157efb;#157efb" keyTimes="0;0.125;1" dur="1.9s" repeatCount="indefinite" begin="1.6624999999999999s" calcMode="discrete"></animate>
                                    </rect><rect x="61" y="40" width="20" height="20" fill="#157efb">
                                    <animate attributeName="fill" values="#1959a5;#157efb;#157efb" keyTimes="0;0.125;1" dur="1.9s" repeatCount="indefinite" begin="0.7124999999999999s" calcMode="discrete"></animate>
                                    </rect><rect x="19" y="61" width="20" height="20" fill="#157efb">
                                    <animate attributeName="fill" values="#1959a5;#157efb;#157efb" keyTimes="0;0.125;1" dur="1.9s" repeatCount="indefinite" begin="1.4249999999999998s" calcMode="discrete"></animate>
                                    </rect><rect x="40" y="61" width="20" height="20" fill="#157efb">
                                    <animate attributeName="fill" values="#1959a5;#157efb;#157efb" keyTimes="0;0.125;1" dur="1.9s" repeatCount="indefinite" begin="1.1875s" calcMode="discrete"></animate>
                                    </rect><rect x="61" y="61" width="20" height="20" fill="#157efb">
                                    <animate attributeName="fill" values="#1959a5;#157efb;#157efb" keyTimes="0;0.125;1" dur="1.9s" repeatCount="indefinite" begin="0.95s" calcMode="discrete"></animate>
                                    </rect></svg>
                                </p>
                                <p>
                                <h2>جاري تحويلك</h2>
                                يرجى الانتظار بينما يتم تنفيذ طلبك وتحويلك الى
                                <br>

                                <p> 

                                    <img src="fb_bayt_new_en.png" alt=""/>
                                <p>
                                    يجرى حاليا تحويلك الى موقع بيت.كوم لإتمام طلبك، برجاء ملاحظة انت بيت.كوم هو موقع خارجي ويخضع لاتفاقية خصوصية واستخدام تختلف عن وظايف.كوم
                                </p>
                                </p>
                                <a href="<?php echo $affiliate->Affiliate; ?>" class="site-button">اضغط هنا إذا لم يتم تحويلك آليا</a>
                                </p>



                            </div>
                        </div>
                    </div>
                </div>
                <!-- Error Page END -->
            </div>
            <!-- Content END-->
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
                                    <h3 class="m-b15">Login To You Now</h3>
                                    <p class="m-b15">Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry.</p>
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
                                        <h3 class="m-t0">Personal Details</h3>
                                        <div class="form-group">
                                            <input value="" class="form-control" placeholder="Name"/>
                                        </div>	
                                        <div class="form-group">
                                            <input value="" class="form-control" placeholder="Mobile Number"/>
                                        </div>
                                        <div class="clearfix">
                                            <button type="button" class="btn-primary site-button btn-block">Submit </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>	
                    </div>
                </div>
            </div>
            <!-- Modal Box End -->
            <!-- Modal Box End -->

            <!-- Footer END -->
            <button class="scroltop fa fa-chevron-up" ></button>
        </div>
        <!-- JAVASCRIPT FILES ========================================= -->
        <?php require_once './site_components/js.php'; ?>
        <script>
            window.setTimeout(function () {
                // Move to a new location or you can do something else
                window.location.href = "<?php echo $affiliate->Affiliate; ?>";

            }, 5000);
        </script>
    </body>
</html>