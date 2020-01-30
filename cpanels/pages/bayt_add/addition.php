<?php require_once './Settings.php'; ?>
<?php require_once '../../../FileConnection/Data_connection.php'; ?>
<?php require_once '../../../FileConnection/Extra_functions.php'; ?>
<?php require_once '../../../Classes/Achieve.php'; ?>
<?php require_once '../../../Classes/Component.php'; ?>
<?php $class = new Achieve(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo Page; ?></title>
        <?php require_once '../../General_components/css.php'; ?>


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
                        <ol class="breadcrumb">
                            <li><a href="#"><i class="fa fa-pagelines"></i> الرئسية</a></li>
                            <li><a href="../job/spreadsheet.php"><?php echo Page; ?></a></li>
                            <li class="active">اضافة موضوع جديد</li>
                        </ol>
                    </section>
                    <!-- Main content -->
                    <section class="content">

                        <div class="row">
                            <div class="col-xs-12">
                                <div class="box">
                                    <div class="box-body">
                                        <div class="row">
                                            <?php require_once '../../General_files/php/ap_hom.php'; ?>
                                        </div>
                                        <hr>
                                        <form action="phpajax/add.php" id="uploadImage" method="post" enctype="multipart/form-data">
                                            <div class="content">
                                                <div class="col-md-2">
                                                    <div class="list-group ">
                                                        <a href="#" class="list-group-item active">اقسام الوظائف</a>
                                                        <?php
                                                        echo '<pre>';
                                                        print($_GET);
                                                          echo '<pre/>';
                                                        
                                                        $query = "select * from  sections_bayt ORDER BY `sections_bayt`.`id` DESC ;";
                                                        $array = array();
                                                        $rows = $class->sql_feth($Data_communication, $query, $array);
                                                        if (count($rows) > 0) :
                                                            foreach ($rows as $value):
                                                                $id = $value['id'];
                                                                $sections = $value['sections'];
                                                                $url = $value['url'];
                                                                $color = $value['color'];
                                                                ?>
                                                                <a  href="#" hr="<?php echo $url; ?>" class="list-group-item" style="background: <?php echo $color; ?>;color: white;"><?php echo $sections; ?></a>
                                                                <?php
                                                            endforeach;
                                                        endif;
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="list-group ">
                                                        <a href="#" class="list-group-item active pag">Jobs</a>
                                                        <div  id="box">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div id="loader_image">
                                                        <img src="animator.gif" alt="" width="100"/></div>
                                                    <div id="form_data">
                                                        <div class="input-group margin">
                                                            <span class="label label-primary">بيانات القسم بيت دوت كوم</span>&nbsp;
                                                            <span class="label label-info">بيانات موقع بيت دوت كوم</span>&nbsp;
                                                            <span class="label label-danger">البيانات الاضافية للنموذج</span>&nbsp;
                                                        </div>
                                                        <?php require_once './php/form_add.php'; ?>
                                                    </div>

                                                </div>
                                                <div id="book">
                                                    <img src="https://assets.dice.com/techpro/img/homepage/v2_img/ico_valueprop_5@2x.png" style=" float: right; margin-top: 1%; margin-bottom: 1%;" width="150" class="img-circle" id="img" alt="Cinque Terre">
                                                </div>
                                                <br>
                                                <br>
                                                <br>
                                                <hr>
                                                <input type="submit" class="btn btn-info btn-block btn-lg margin btn" value="اضافة موضوع جديد">
                                            </div>
                                    </div>
                                    </form>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- /.col -->
                </div><!-- /.row -->
                </section><!-- /.content -->
                <div class="content ">
                    <div id="targetLayer">
                    </div>
                </div>
            </div>
            <?php require_once './php/pagnation.php'; ?>

        </div><!-- /.content-wrapper -->
        <?php require_once '../../General_components/fotter.php'; ?>

    </div><!-- ./wrapper -->

    <?php require_once '../../General_components/js.php'; ?>
    <script src="//cdn.ckeditor.com/4.13.0/full/ckeditor.js"></script>   
    <script>
        $(document).ready(function () {
            $(".list-group-item").click(function () {
                var hreff = $(this).attr('hr');
                var bayt = $(this).text();
                $('#bayt').val(bayt);
                //========================
                var pag = $('#pag').val();
                $.ajax({
                    url: 'phpajax/jop.php',
                    method: "POST",
                    data: {hreff: hreff, pag: pag},
                    beforeSend: function () {

                        //$('#loader_image').show();

                        $('#loader_image').show();
                        $('#form_data').hide();
                        $('#img').hide();

                    },
                    success: function (data) {

                        $('#loader_image').hide();
                        $('#box').html(data);
                        $('#img').hide();
                    }
                });
                return false;

            });
        });
    </script>
    <script>
        $(document).ready(function () {
            $('#loader_image').hide();
            $('#img').hide();
            //   $('#loader_image').hide();
            $('body').on('click', '.sfd', function () {
                var hreff = $(this).attr('serlink');
                $.ajax({
                    url: 'phpajax/jop_details.php',
                    method: "POST",
                    data: {hreff: hreff},
                    beforeSend: function () {

                        $('#loader_image').show();
                        $('#form_data').hide();
                        $('#img').hide();
                    },
                    success: function (data) {
                        $('#loader_image').hide();
                        $('#form_data').show();
                        $('#img').show();

                        //  var Job_Description = $(data).find(".card-content ul ").html();
                        var Job_Description = $(data).find(".card-content  ").eq(0).html();
                        var Skills = $(data).find(".card-content ul ").eq(1).html();
                        var Job_Details = $(data).find(".card-content dl").html();
                        var Preferred_candidate = $(data).find(".card-content dl").eq(1).html();
                        var About_us= $(data).find(".p20t").eq(1).html();
                        
                        var id = $(data).find(".t-large").text();
                        var Company = $(data).find(".is-black").eq(0).text();
                        var Minimum = $(data).find(".dlist div dd").eq(5).text().split(" - ");
                        var City = $(data).find(".dlist div dd").eq(0).text().split(",");
                        var img = $(data).find("img").attr('src');
                        var specialty = $(data).find('.tag ').eq(0).text();
                        var Keywords = $(data).find('.tag ').eq(0).text() + "," + $(data).find('.tag ').eq(1).text() + "," + $(data).find('.tag ').eq(3).text() + "," + $(data).find('.tag ').eq(4).text();
                        var Keywords_key;
                        for (var i = -1; i < $(data).find('.tag ').length - 2; i++) {
                            // Iterate over numeric indexes from 0 to 5, as everyone expects.
                            console.log($(data).find('.tag ').eq(i).text() + ",");
                            Keywords_key += $(data).find('.tag ').eq(i).text() + ",";
                        }

                        if (City.length === 2) {
                            var Country1 = City[1];
                            var City1 = City[0];
                        } else {
                            var Country1 = City[2];
                            var City1 = City[0] + "," + City[1];
                        }
                        //==========================================
                        $('#Title').val(id);

                        $('.bayt').html(Job_Description);


                        $('#Company').val(Company);
                        $('#Country').val(Country1);
                        $('#City').val(City1);
                        $('#Minimum').val(Minimum[0]);
                        $('#Maximum').val(Minimum[1]);
                        $('#specialty').val(specialty);
                        $('#Keywords').val(Keywords_key.replace("undefined ", ""));
                        $('#img').attr('src', img);
                        $('#img').attr('width', 150);
                        $('#Image').val(img);

                    }
                });
                return false;


            });
        });
    </script>


</body>
</html>
