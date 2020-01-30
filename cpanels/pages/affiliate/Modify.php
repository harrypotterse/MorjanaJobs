<?php require_once './Settings.php'; ?>
<?php require_once '../../../FileConnection/Data_connection.php'; ?>
<?php require_once '../../../FileConnection/Extra_functions.php'; ?>
<?php require_once '../../../Classes/Achieve.php'; ?>
<?php require_once '../../../Classes/Component.php'; ?>
<?php
$class = new Achieve();
$sql = "SELECT * FROM `affiliate` ";
$pag = new Component();
$page_components = $pag->fetchObject_SQL($Data_communication, $sql);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo Page; ?></title>
        <?php require_once '../../General_components/css.php'; ?>
        <style>
            .box {
                border-color: #e6e6e6;
                background: #f5f5f5;
                border-radius: 6px;
                /* box-shadow: 0 2px 4px rgba(0, 0, 0, 0.25); */
                padding: 10px;
                margin-bottom: 40px;
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
                    <!-- Main content -->
                    <section class="content">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="box">
                                    <?php require_once '../../General_files/php/ap.php'; ?>
                                    <div class="box-body">
                                        <form action="phpajax/edit.php" id="uploadImage" method="post" enctype="multipart/form-data">
                                            <div class="content">
                                                <div class='col-lg-offset-2 col-lg-10 '>
                                                    <div class="col-md-12">
                                                        <!-- Custom Tabs (Pulled to the right) -->
                                                        <div class="nav-tabs-custom">
                                                            <ul class="nav nav-tabs pull-right">
                                                                <li class="active"><a href="#hom" data-toggle="tab">Component image</a></li>
                                                                <li class=""><a href="#tab_1-1" data-toggle="tab">Tab 1</a></li>
                                             

                                                                <li class="pull-left header"> <?php echo Page; ?>&nbsp;&nbsp;&nbsp;<i class="fa fa-th"></i></li>
                                                            </ul>
                                                            <div class="tab-content">
                                                                <div class="tab-pane active" id="hom">
                                                                    <img src="https://socialenablers.co/wp-content/uploads/2018/10/Instagram-Affiliate-marketing-1454x727.jpg" class="img-responsive">
                                                                </div>
                                                                <div class="tab-pane " id="tab_1-1">
                                                                    <div class="input-group margin">
                                                                        <textarea class="form-control custom-control" rows="9" style="resize:none" name="statement1"><?php echo $page_components->Affiliate; ?></textarea>     
                                                                        <span class="input-group-addon btn btn-primary">الرابط</span>
                                                                    </div>
                                                              

                                                                </div><!-- /.tab-pane -->
                                                  
                                                            </div><!-- /.tab-content -->
                                                        </div><!-- nav-tabs-custom -->
                                                    </div><!-- /.col -->
                                                    <input type="submit" class="btn btn-info btn-block btn-lg margin btn" value="تعديل الموضوع">

                                                </div>

                                            </div>
                                        </form>

                                    </div><!-- /.box-body -->

                                </div><!-- /.box -->

                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </section><!-- /.content -->
                    <div class="content">
                        <div id="targetLayer">

                        </div>
                    </div>
                </div>

            </div><!-- /.content-wrapper -->
            <?php require_once '../../General_components/fotter.php'; ?>

        </div><!-- ./wrapper -->
        <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
        <?php require_once '../../General_components/js.php'; ?>
        <script>
            $(function () {
                $('input[type=file]').change(function () {
                    var t = $(this).val();
                    var labelText = 'File : ' + t.substr(12, t.length);
                    $(this).prev('label').text(labelText);
                })
            });

        </script>
        <script type="text/javascript">
            tinymce.init({
                selector: "#textarea",
                plugins: [
                    "advlist autolink lists link image charmap print preview anchor",
                    "searchreplace visualblocks code fullscreen",
                    "insertdatetime media table paste"
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
            });
        </script>

    </body>
</html>
