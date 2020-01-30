<div class="modal fade browse-job modal-bx-info editor" id="profilename" tabindex="-1" role="dialog" aria-labelledby="ProfilenameModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ProfilenameModalLongTitle">التفاصيل الشخصية</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="uploadImage2"  action="Forms/cv-profile.php"   method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-6 col-md-6" style="display: none">
                            <div class="form-group">
                                <label>الأسم</label>
                                <input type="hidden" class="form-control" placeholder="الاسم بالكامل" name="id" value="<?php echo $id; ?>">
                                <input type="text" class="form-control" placeholder="الاسم بالكامل" name="Files" value="<?php echo $Files; ?>">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>الأسم</label>
                                <input type="text" class="form-control" placeholder="الاسم بالكامل" name="Name" value="<?php echo $Name; ?>">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>السن</label>
                                <input type="text" class="form-control" placeholder="الاسم بالكامل" name="Age" value="<?php echo $Age; ?>">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>الجوال</label>
                                <input type="number" class="form-control" placeholder="الاسم بالكامل" name="mobile" value="<?php echo $mobile; ?>">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>البريد الالكتروني</label>
                                <input type="text" class="form-control" placeholder="email@gmail.com" name="Mail" value="<?php echo $Mail; ?>">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>البلد</label>
                                <input type="text" class="form-control" placeholder="الاردن" name="Country" value="<?php echo $Country; ?>">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>المدينة</label>
                                <input type="text" class="form-control" placeholder="عمان" name="City" value="<?php echo $City; ?>">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>معلومات الوظيفه</label>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <input type="text" class="form-control" placeholder="الدرجه العلمية" name="Degree" value="<?php echo $Degree; ?>">
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <input type="text" class="form-control" placeholder="الجامعه" name="College" value="<?php echo $College; ?>">
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                        <input type="text" class="form-control" placeholder="عنوان الوظيفه" name="Function" value="<?php echo $Function; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>التخصص</label>
                                <select name="Specialty">
                                    <?php
                                    $query = "select * from  specialty ORDER BY `specialty`.`id` DESC ;";
                                    $array = array();
                                    $rows = $class->sql_feth($Data_communication, $query, $array);
                                    if (count($rows) > 0) :
                                        foreach ($rows as $value):
                                            $id = $value['id'];
                                            $Specialty_ = $value['Specialty'];
                                            ?>
                                            <option value="<?php echo $id; ?>"  <?= $Specialty_ == $Specialty ? ' selected="selected"' : ''; ?>><?php echo $Specialty_; ?></option>
                                            <?php
                                        endforeach;
                                    endif;
                                    ?>
                                </select>
                            </div>		
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <textarea name="Description" rows="4" class="form-control" required placeholder="الرسالة...."><?php echo $Description; ?></textarea>
                                </div>
                            </div>
                        </div>
                        
                        

                        <div class="col-lg-12">
                            <h5 class="m-b10" style="text-align: center">تحميل السيره الذاتيه من جديد</h5>
                            <p style="text-align: center">يمكنك تحميل السيره الذاتيه من جديد من هنا</p>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <div class="custom-file">
                                        <p class="m-auto align-self-center">
                                            <i class="fa fa-upload"></i>
                                            Upload Resume File size is 3 MB
                                        </p>
                                        <input type="file" class="site-button form-control" id="customFile" name="Files_img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="submit" class="site-button btn-block" name="sub" value="حفظ">
                </form>
                <div id="targetLayer2">                 
                </div>
            </div>
            <div class="modal-footer">
                <input type="submit" class="site-button" data-dismiss="modal" value="الغاء">       
            </div>
        </div>
    </div>
</div>