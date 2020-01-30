<div class="section-full browse-job-find">
    <div class="container">
        <div class="find-job-bx">
            <form class="dezPlaceAni" action="job-list.php" method="post">
                <div class="row">
                    <div class="col-lg-10 col-md-10">
                        <div class="form-group">
<!--                            <label>عنوان الوظيفه - اسم الشركة</label>-->
                            <?php
                            $search_keyword = '';
                            if (!empty($_POST['search']['keyword'])) {
                                $search_keyword = $_POST['search']['keyword'];
                            }
                            ?>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="" name='search[keyword]' value="<?php echo $search_keyword; ?>" >
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa fa-search"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--                                    <div class="col-lg-10 col-md-10">
                                                            <div class="form-group">
                                                                <label>عنوان الوظيفه - اسم الشركة</label>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" placeholder="" name="Title_Company">
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text"><i class="fa fa-search"></i></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>-->
                    <!--                                    <div class="col-lg-3 col-md-6">
                                                            <div class="form-group">
                                                                <label>المدينه - البلد</label>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" placeholder="" name="Country_City">
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text"><i class="fa fa-map-marker" ></i></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6">
                                                            <div class="form-group">
                                                                <select name="">
                                                                    <option>اختر المجال</option>
                                                                    <option>هندسه</option>
                                                                    <option>طب</option>
                                                                    <option>صيدله</option>
                                                                    <option>هندسه</option>
                                                                    <option>طب</option>
                                                                    <option>صيدله</option>
                                                                </select>
                                                            </div>
                                                        </div>-->
                    <div class="col-lg-2 col-md-6">
                        <button type="submit" class="site-button btn-block">أبحث الان</button>
                    </div>
                </div>
    

        </div>
    </div>
</div>