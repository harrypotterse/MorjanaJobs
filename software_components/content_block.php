<div class="content-block">
    <!-- Browse Jobs -->
    <div class="section-full bg-white p-t50 p-b20">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8 m-b30">
                    <div class="job-bx submit-resume">
                        <div class="job-bx-title clearfix">
                            <h5 class="font-weight-700 pull-left text-uppercase">'طلب وظيفة</h5>
                            <a href="index.php" class="site-button right-arrow button-sm float-right">الرجوع للرئيسية</a>
                        </div>
                        <form action="Forms/post-jobs.php" method="post" id="uploadImage" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>عنوان الوظيفة</label>
                                        <input type="text" class="form-control" placeholder="عنوان الوظيفة" name="Title">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>اسم الشركة</label>
                                        <input type="text" class="form-control" placeholder="اسم الشركة" name="Company">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>كلمات مفتاحية</label>
                                        <input type="text" class="form-control tags_input" value="هندسة,مدني,خرسانة" name="Keywords"/>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>الحد الأدني للمرتب</label>
                                        <input type="text" class="form-control" placeholder="e.g. 1000$" name="Minimum">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>الحد الأقصي للمرتب</label>
                                        <input type="text" class="form-control" placeholder="e.g. 2000$" name="Maximum">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>التخصص</label> 
                                        <select name="specialty">
                                            <?php
                                            $query = "select * from  specialty ORDER BY `specialty`.`id` DESC;";
                                            $array = array();
                                            $rows = $class->sql_feth($Data_communication, $query, $array);
                                            if (count($rows) > 0) :
                                                foreach ($rows as $value):
                                                    $id = $value['id'];
                                                    $Specialty = $value['Specialty'];
                                                    $Icon = $value['Icon'];
                                                    ?>  
                                                    <option value="<?php echo $id; ?>"><?php echo $Specialty; ?></option>
                                                    <?php
                                                endforeach;
                                            endif;
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>ايميل التواصل</label>
                                        <input type="mail" class="form-control" placeholder="email@gmail.com" name="Email">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>البلد</label>
                                        <input type="text" class="form-control" placeholder="الاردن" name="Country">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>المدينة</label>
                                        <input type="text" class="form-control" placeholder="عمان" name="City">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>حمل ملف متطلبات الوظيفة</label>
                                        <div class="custom-file">
                                            <p class="m-a0">
                                                <i class="fa fa-upload"></i>
                                                تحميل الملف
                                            </p>
                                            <input type="file" class="site-button form-control" id="customFile" name="Files">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="submit" value="حفظ المعلومات"   class="site-button m-b30" >
                            <div id="targetLayer">                 
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 m-b30">
                    <?php echo googel_ads($Data_communication, "post-jobs", "side1"); ?>
                    <?php echo googel_ads($Data_communication, "post-jobs", "side2"); ?>      
                </div>
            </div>
        </div>
    </div>
    <!-- Browse Jobs END -->
</div>