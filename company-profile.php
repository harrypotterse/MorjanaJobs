<?php
require_once './FileConnection/Data_connection.php';
require_once './FileConnection/Extra_functions.php';
require_once './Classes/Session.php';
require_once './Classes/Achieve.php';
require_once './Classes/Component.php';
//=======================class==================================
$Component = new Component();
$session = new Session("login.php");
$class = new Achieve();
//=======================$session==================================
$session->logout("logout");
$user = $session->get_session_data("user");
$Full_user = sql_feth($Data_communication, array($user));
$Page_user = password_hash("job", PASSWORD_DEFAULT);
$id_user = sql_feth_id($Data_communication, array($user));
$id_session = $session->get_session_data("id");
//=========================================================
$fotter = $Component->fetchObject_SQL($Data_communication, "SELECT * FROM `page_components` where id = 1");
$settings = $Component->fetchObject_SQL($Data_communication, "SELECT * FROM `settings`");
$about = $Component->fetchObject_SQL($Data_communication, "SELECT * FROM `page_components` where id = 5");
$affiliate = $Component->fetchObject_SQL($Data_communication, "SELECT * FROM `affiliate`");
//=======================PHPMailer==================================
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
            <!-- header END -->
            <!-- header END -->
            <!-- Content -->
            <div class="page-content bg-white">
                <!-- contact area -->
                <div class="content-block">
                    <!-- Browse Jobs -->
                    <?php require_once './software_components/jobs.php'; ?>
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