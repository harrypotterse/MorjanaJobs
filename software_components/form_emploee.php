<form id="uploadImage"  action="Forms/emploee-profile.php"   method="post" enctype="multipart/form-data">
    <div class="row m-b30">
        <div class="col-lg-6 col-md-6">
            <div class="form-group">
                <label>الأسم ثلاثي</label>
                <input type="text" class="form-control" placeholder=" " name="Name">
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="form-group">
                <label>السن</label>
                <input type="text" class="form-control" placeholder=" " name="Age">
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="form-group">
                <label>الجوال</label>
                <input type="text" class="form-control" placeholder="+1 123 456 7890" name="mobile">
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="form-group">
                <label>البريد الالكتروني</label>
                <input type="text" class="form-control" placeholder="info@example.com" name="Mail">
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="form-group">
                <label>البلد:</label>
                <input type="text" class="form-control" placeholder="" name="Country">
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="form-group">
                <label>المدينة:</label>
                <input type="text" class="form-control" placeholder="" name="City">
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="form-group">
                <label>الدرجه العلمية</label>
                <input type="text" class="form-control" placeholder="" name="Degree">
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="form-group">
                <label>اسم الكلية</label>
                <input type="text" class="form-control" placeholder=" " name="College">
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="form-group">
                <label>عنوان الوظيفه</label>
                <input type="text" class="form-control" placeholder="مهندس مدني" name="Function">
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="form-group">
                <label>التخصص</label>
                <select class="bs-select-hidden" name="Specialty">
                    <?php
            $query = "select * from  specialty ORDER BY `specialty`.`id` DESC ;";
            $array = array();
            $rows = $class->sql_feth($Data_communication, $query, $array);
            if (count($rows) > 0) :
                foreach ($rows as $value):
                    $id = $value['id'];
                    $Specialty = $value['Specialty'];
                    $Icon = $value['Icon'];  
            ?>
                    <option value="<?php echo  $id ; ?>"><?php echo  $Specialty ; ?></option>
                    <?php
                endforeach;
            endif;       
            ?>
                </select>
            </div>
        </div>
        <div class="col-lg-12 col-md-12">
            <div class="form-group" name="">
                <label>الوصف- معلومات تعريفيه عن الموظف</label>
                <textarea class="form-control" name="Description">اكتب نبذه تعريفيه عنك وعن مجالك.</textarea>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-md-12">
        <div class="form-group">
            <label>أختار ملف</label>
            <div class="custom-file">
                <p class="m-a0">
                    <i class="fa fa-upload"></i>
                    تحميل السيره الذاتية
                </p>
                <input type="file" class="site-button form-control" id="customFile" name="Files">
            </div>
        </div>
    </div>
    <input type="submit" value="حفظ البيانات" class="site-button m-b30">
    <div id="targetLayer">                 
    </div>
</form>