<?php require_once './Settings.php'; ?>
<?php require_once '../../../FileConnection/Data_connection.php'; ?>
<?php require_once '../../../FileConnection/Extra_functions.php'; ?>
<?php require_once '../../../Classes/Achieve.php'; ?>
<?php require_once '../../../Classes/Component.php'; ?>
<?php
$class = new Achieve();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo Page; ?></title>
        <?php require_once '../../General_components/css.php'; ?>
        <style>
            img.img-responsive {
                width: 85%;
            }
        </style>
    </head>
    <body class="skin-blue sidebar-mini">
        <div class="wrapper">
            <?php require_once '../../General_components/top_nave.php'; ?>
            <!-- Left side column. contains the logo and sidebar -->
            <?php require_once '../../General_components/nav.php'; ?>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">

                <div class="content">
                    <!-- Content Wrapper. Contains page content -->
                    <!-- Content Header (Page header) -->
                    <section class="content-header">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <img src="<?php echo Link; ?>" width="150"><br>
                                    <h3 class="box-title" style="text-align: right;direction: rtl;"><?php echo Page; ?></h3>

                                </div><!-- /.box-header -->

                                </section>
                                <!-- Main content -->
                                <section class="content">
                                    <div class="row">
                                        <div class="box-body">
                                            <table id="example2" class="table table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                 
                                                        <th>الملف</th>
                                                        <th>المدينة</th>
                                                        <th>الدولة</th>
                                                        <th>الكلمات الدلالية</th>
                                                        <th>   الشركة </th>
                                                        <th>الوظيفة </th>
                                                        <th>الشعار </th>
                                                        <th># </th>
                                                    </tr>
                                                </thead>
                                                <?php require_once './php/Table.php'; ?>
                                            </table>
                                        </div><!-- /.box-body -->

                                    </div><!-- /.box -->

                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </section><!-- /.content -->

                </div>

            </div><!-- /.content-wrapper -->
            <?php require_once '../../General_files/php/del_box.php'; ?>
            <?php require_once '../../General_components/fotter.php'; ?>
        </div><!-- ./wrapper -->
        <?php require_once '../../General_components/js.php'; ?>

        <script>
            $(document).on("click", '.del', function (event) {
                var id = $(this).attr('id');
                var Image = $(this).attr('Image');
                $('#delete').modal('show');
                $("#del2").click(function () {
                    $.post('./phpajax/Delete_the_file.php', {id: id, Image: Image}, function (data) {
                        //  alert(data);
                        location.reload();
                    });
                });
            });
            $(document).on("click", '.Acceptance', function (event) {
                var Acceptance = $(this).attr('Acceptance');
                $.post('./phpajax/Acceptance.php', {Acceptance: Acceptance}, function (data) {
                    //  alert(data);
               //     alert(data);
                  location.reload();
                });

            });
        </script>
        <script src="../../General_files/js/Shortcuts.js" type="text/javascript"></script>
    </body>
</html>