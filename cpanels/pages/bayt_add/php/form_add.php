<div class="input-group margin">
    <input type="text" class="form-control input-lg" name="pag" id="pag" value="1">
    <span class="input-group-btn ">
        <button class="btn btn-warning btn-flat btn-lg" type="button" >مؤشر الصفحة</button>
    </span>
</div>
<div class="input-group margin">
    <input type="text" class="form-control input-lg" name="Title" id="Title">
    <span class="input-group-btn ">
        <button class="btn btn-info btn-flat btn-lg" type="button" >الوظيفة</button>
    </span>
</div>

<div class="input-group margin">
    <input type="text" class="form-control input-lg" name="Company"  id="Company" >
    <span class="input-group-btn ">
        <button class="btn btn-info btn-flat btn-lg" type="button">الشركة</button>
    </span>
</div>
<div class="input-group margin">
    <input type="text" class="form-control input-lg" name="Minimum" id="Minimum">
    <span class="input-group-btn ">
        <button class="btn btn-info btn-flat btn-lg" type="button">الحد الاني</button>
    </span>
</div>
<div class="input-group margin">
    <input type="text" class="form-control input-lg" name="Maximum" id="Maximum">
    <span class="input-group-btn ">
        <button class="btn btn-info btn-flat btn-lg" type="button">الحد الاقصي</button>
    </span>
</div>
<div class="input-group margin">
    <input type="text" class="form-control input-lg" name="specialty" id="specialty">
    <span class="input-group-btn ">
        <button class="btn btn-info btn-flat btn-lg" type="button">التخصص</button>
    </span>
</div>
<div class="input-group margin">
    <input type="text" class="form-control input-lg" name="Country" id="Country">
    <span class="input-group-btn ">
        <button class="btn btn-info btn-flat btn-lg" type="button">البلد</button>
    </span>
</div>
<div class="input-group margin">
    <input type="text" class="form-control input-lg" name="City" id="City">
    <span class="input-group-btn ">
        <button class="btn btn-info btn-flat btn-lg" type="button">المدينة</button>
    </span>
</div>
<div class="input-group margin">
    <input type="text" class="form-control input-lg" name="Keywords" id="Keywords">
    <span class="input-group-btn ">
        <button class="btn btn-info btn-flat btn-lg" type="button">كلمات افتتاحية</button>
    </span>
</div>
<div class="input-group margin">
    <input type="text" class="form-control input-lg" name="Image" id="Image">
    <span class="input-group-btn ">
        <button class="btn btn-info btn-flat btn-lg" type="button">رابط الصورة</button>
    </span>
</div>
<div class="input-group margin" style="display: none">
    <input type="text" class="form-control input-lg" name="Email" id="Email">
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
                echo " <option value='$id'>  $Specialty </option>";
            endforeach;
        endif;
        ?>
    </select>
    <span class="input-group-btn ">

        <button class="btn btn-danger btn-flat btn-lg" type="button">الاقسام</button>
    </span>
</div>
<div class="input-group margin">
    <input type="text" class="form-control input-lg" name="bayt" id="bayt">
    <span class="input-group-btn ">
        <button class="btn btn-primary btn-flat btn-lg" type="button">أقسام الوظائف بيت دت كوم</button>
    </span>
</div>
<div class="form-group margin" style=" display: none">
    <button class="btn btn-info btn-flat btn-block" type="button">bayt</button>
    <textarea class="form-control  bayt" rows="5" id="bayt"   name="bayt" placeholder="مواعيد العمل"></textarea>
</div>
<span class="control-fileupload" style="display: none;">
    <label for="file">Choose a file :</label>
    <input type="file" id="Files" name="Files">
</span> 