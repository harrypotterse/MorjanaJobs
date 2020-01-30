<?php
#===========================  تصمين الملفات==========================================
require_once './FileConnection/Data_connection.php';
require_once './FileConnection/Extra_functions.php';
require_once './Classes/Session.php';
require_once './Classes/Achieve.php';
require_once './Classes/Component.php';
require_once './Classes/Plurality.php';
#=================================================================================
$session = new Session("login.php");
$class = new Achieve();
$Component = new Component();
$session->logout("logout");
$user = $session->get_session_data("user");
$Full_user = sql_feth($Data_communication, array($user));
$Page_user = password_hash("cv", PASSWORD_DEFAULT);
$id_user = sql_feth_id($Data_communication, array($user));
$pagnation = Number_of_records($Data_communication, 10);
#===========================  تعريف الكلاسات==========================================
require_once './app/cvs.php';
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
                <!-- contact area -->
                <div class="content-block">
                    <!-- Browse Jobs -->
                    <?php require_once './software_components/jobs_cvs.php'; ?>
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
        <script src="Development/jquery.bootpag.min.js" type="text/javascript"></script>
        <script>
            $('#pagination-here').bootpag({
                total: <?php echo $pagnation[1] ?>,
                page: 1,
                maxVisible: 5,
                leaps: true,
                href: "#result-page-{{number}}",
            })
        </script>
        <script>
            $(function () {
                function  red_data() {
                    pag = 1;
                    //  alert($(this).text());
                    $.ajax({
                        url: "php/pagination.php",
                        method: "POST",
                        data: {pag: pag},
                        success: function (data) {
                            //    alert(data);
                            $('#data').html(data);

                        }
                    });
                }

                red_data()
                $(document).on('click', '.active', function () {
                    var pag = $(this).text();

                    //  alert($(this).text());
                    $.ajax({
                        url: "php/pagination.php",
                        method: "POST",
                        data: {pag: pag},
                        success: function (data) {
                            $('#data').html(data);

                        }
                    });
                });
            });


        </script>
    </body>
</html>