<?php require_once './Settings.php'; ?>
<?php require_once '../../../FileConnection/Data_connection.php'; ?>
<?php require_once '../../../FileConnection/Extra_functions.php'; ?>
<?php require_once '../../../Classes/Achieve.php'; ?>
<?php require_once '../../../Classes/Component.php'; ?>
<?php
$class = new Achieve();
$query = "select * from  job  where id = ? ";
$array_var = array();
$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
$array = array($id);
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
    endforeach;
endif;
?>
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
                        <!--                        <h1 style="text-align: right; direction: rtl;">
                                                    Data Tables
                                                    <small>advanced tables</small>
                                                </h1>-->
                        <ol class="breadcrumb">
                            <li><a href="#"><i class="fa fa-pagelines"></i> الرئسية</a></li>
                            <li><a href="spreadsheet.php"><?php echo Page; ?></a></li>
                            <li class="active">تعديل البيانات</li>
                        </ol>
                    </section>
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
                                                    <div class="input-group margin" style="display: none">
                                                        <input type="text" class="form-control input-lg" name="id" value="<?php echo $id; ?>">
                                                        <input type="hidden" name="file" value="<?php echo  $File ; ?>" >
                                                        <span class="input-group-btn ">
                                                            <button class="btn btn-info btn-flat btn-lg" type="button">ID</button>
                                                        </span>
                                                    </div>
                                                    <div class="input-group margin">
                                                        <input type="text" class="form-control input-lg" name="Title" id="Title" value="<?php echo $Title; ?>">
                                                        <span class="input-group-btn ">
                                                            <button class="btn btn-info btn-flat btn-lg" type="button" >الوظيفة</button>
                                                        </span>
                                                    </div>
                                                    <div class="input-group margin">
                                                        <input type="text" class="form-control input-lg" name="Company"  id="Company"  value="<?php echo $Company; ?>">
                                                        <span class="input-group-btn ">
                                                            <button class="btn btn-info btn-flat btn-lg" type="button">الشركة</button>
                                                        </span>
                                                    </div>
                                                    <div class="input-group margin">
                                                        <input type="text" class="form-control input-lg" name="Minimum" id="Minimum" value="<?php echo $Minimum; ?>">
                                                        <span class="input-group-btn ">
                                                            <button class="btn btn-info btn-flat btn-lg" type="button">الحد الاني</button>
                                                        </span>
                                                    </div>
                                                    <div class="input-group margin">
                                                        <input type="text" class="form-control input-lg" name="Maximum" id="Maximum" value="<?php echo $Maximum; ?>">
                                                        <span class="input-group-btn ">
                                                            <button class="btn btn-info btn-flat btn-lg" type="button">الحد الاقصي</button>
                                                        </span>
                                                    </div>
                                                    <div class="input-group margin">
                                                        <input type="text" class="form-control input-lg" name="specialty" id="specialty" value="<?php echo $specialty; ?>">
                                                        <span class="input-group-btn ">
                                                            <button class="btn btn-info btn-flat btn-lg" type="button">التخصص</button>
                                                        </span>
                                                    </div>
                                                    <div class="input-group margin">
                                                        <input type="text" class="form-control input-lg" name="Country" id="Country" value="<?php echo $Country; ?>">
                                                        <span class="input-group-btn ">
                                                            <button class="btn btn-info btn-flat btn-lg" type="button">البلد</button>
                                                        </span>
                                                    </div>
                                                    <div class="input-group margin">
                                                        <input type="text" class="form-control input-lg" name="City" id="City" value="<?php echo $City; ?>">
                                                        <span class="input-group-btn ">
                                                            <button class="btn btn-info btn-flat btn-lg" type="button">المدينة</button>
                                                        </span>
                                                    </div>
                                                    <div class="input-group margin">
                                                        <input type="text" class="form-control input-lg" name="Keywords" id="Keywords" value="<?php echo $Keywords; ?>">
                                                        <span class="input-group-btn ">
                                                            <button class="btn btn-info btn-flat btn-lg" type="button">كلمات افتتاحية</button>
                                                        </span>
                                                    </div>
                                                    <div class="input-group margin">
                                                        <input type="text" class="form-control input-lg" name="url" id="Image" value="<?php echo $url; ?>">
                                                        <span class="input-group-btn ">
                                                            <button class="btn btn-info btn-flat btn-lg" type="button">رابط الصورة</button>
                                                        </span>
                                                    </div>
                                                    <div class="input-group margin">
                                                        <input type="text" class="form-control input-lg" name="Email" id="Email" value="<?php echo $Email; ?>">
                                                        <span class="input-group-btn ">
                                                            <button class="btn btn-danger btn-flat btn-lg" type="button">البريد الالكتروني</button>
                                                        </span>
                                                    </div>
                                                    <div class="input-group margin">
                                                        <select  class="form-control input-lg" id="sel1" name="specialty">
                                                            <?php
                                                            $query = "select * from  specialty  ORDER BY `specialty`.`id` DESC ;";
                                                            $array = array();
                                                            $rows = $class->sql_feth($Data_communication, $query, $array);
                                                            if (count($rows) > 0) :
                                                                foreach ($rows as $value):
                                                                    $id = $value['id'];
                                                                    $Specialty = $value['Specialty'];
                                                                    $Icon = $value['Icon'];
                                                                 
                                                             
                                                            ?>
                                                           
                                                            <option  <?= $Specialty == $id ? ' selected="selected"' : ''; ?> value="<?php echo  $id ; ?>"><?php echo $Specialty; ?></option>
                                                            <?php
                                         endforeach;
                                                            endif;                      
                                    ?>
                                                        </select>
                                                        <span class="input-group-btn ">

                                                            <button class="btn btn-danger btn-flat btn-lg" type="button">الاقسام</button>
                                                        </span>
                                                    </div>
                                                    <span class="control-fileupload">
                                                        <label for="file">Choose a file :</label>
                                                        <input type="file" id="uploadFile" name="uploadFile">
                                                    </span> 
                                                    <input type="submit" class="btn btn-info btn-block btn-lg margin btn" value="تعديل الموضوع">

                                                    <a type="button" class="btn btn-info" href="../../../Public/job/<?php echo $File; ?>">معاينة السيرة الذاتية</a>


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
