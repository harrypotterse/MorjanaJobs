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
        <link href="../../General_files/css/tabel/main.css" rel="stylesheet" type="text/css"/>
        <link href="../../General_files/css/tabel/util.css" rel="stylesheet" type="text/css"/>
        <style>
            table td, table th {
                padding-left: 0px;
                text-align: center !important;
            }
            .column4 {
                width: 26%;
                text-align: right;
            }
            table * {
                position: relative;
                font-family: 'Cairo', sans-serif !important;
            }
            h1 {
                text-align: end;
                color: #36304a;
                font-family: 'Cairo', sans-serif !important;
                margin-bottom: 10px
            }
            .content {
                min-height: 250px;
                padding: 15px;
                margin-right: auto;
                margin-left: auto;
                padding-left: 15px;
                padding-right: 15px;
                box-shadow: 13px 1px 4px black;
                background: white;
                box-shadow: inset 2px -1px 4px black;
                background-image: url(https://www.jakpost.travel/imgfiles/full/7/73742/web-development-wallpaper.jpg);
                background-repeat: no-repeat;
                background-position: center center;
                background-attachment: fixed;
            }
            h1 {
                text-align: end;
                color: #ffffff;
                font-family: 'Cairo', sans-serif !important;
                margin-bottom: 10px;
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

                    <div class="content">
                        <div class="limiter">
                            <div class="container-table100">
                                <div class="wrap-table100">
                                    <div class="table100">
                                        <h1>افضل 20 موظف في الموقع</h1>
                                        <table>
                                            <thead>
                                                <tr class="table100-head">
                                                    <th class="column3">المعدل</th>
                                                    <th class="column4">الوظيفة</th>
                                                    <th class="column5">الاسم</th>
                                                    <th class="column6">#</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $query = "select * from  cv ORDER BY `cv`.`Views` DESC limit 20;";
                                                $array = array();
                                                $rows = $class->sql_feth($Data_communication, $query, $array);
                                                //=======================PHPMailer==================================

                                                if (count($rows) > 0) :
                                                    foreach ($rows as $value):
                                                        $id = $value['id'];
                                                        $Name = $value['Name'];
                                                        $Age = $value['Age'];
                                                        $mobile = $value['mobile'];
                                                        $Mail = $value['Mail'];
                                                        $Country = $value['Country'];
                                                        $City = $value['City'];
                                                        $Degree = $value['Degree'];
                                                        $College = $value['College'];
                                                        $Function = $value['Function'];
                                                        $Specialty = $value['Specialty'];
                                                        $Description = $value['Description'];
                                                        $Date = $value['Date'];
                                                        $day = $value['day'];
                                                        $Month = $value['Month'];
                                                        $Files = $value['Files'];
                                                        $Views = $value['Views'];
                                                        $Acceptance = $value['Acceptance'];
                                                        $user = $value['user'];
                                                        ?>
                                                        <tr>

                                                            <td class="column3"><?php echo $Views; ?></td>
                                                            <td class="column4"><?php echo $Function; ?></td>
                                                            <td class="column5"><?php echo $Name; ?></td>
                                                            <td class="column6"><?php echo $id; ?></td>
                                                        </tr>
                                                        <?php
                                                    endforeach;
                                                endif;
                                                ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

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
        </script>
        <script src="../../General_files/js/Shortcuts.js" type="text/javascript"></script>
    </body>
</html>
