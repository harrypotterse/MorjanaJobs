<div class="section-full job-categories content-inner-2 bg-white">
    <div class="container">
        <div class="section-head d-flex head-counter clearfix">
            <div class="mr-auto">
                <h2 class="m-b5">اقسام الوظائف من موقع مرجانة</h2>
                <h6 class="fw3">20+ من اقسام الوظائف في موقعنا</h6>
            </div>
            <div class="head-counter-bx">
                <h2 class="m-b5 counter"><?php
                    $sql = "select * from  job where Acceptance = 1 ";
                    $array_var = array();
                    echo $job = $class->count($Data_communication, $sql, $array_var);
                    ?></h2>
                <h6 class="fw3">وظيفه متاحة</h6>
            </div>
            <div class="head-counter-bx">
                <h2 class="m-b5 counter"><?php
                    $sql = "select * from  cv ";
                    $array_var = array();
                    echo $cv = $class->count($Data_communication, $sql, $array_var);
                    ?></h2>
                <h6 class="fw3">موظف</h6>
            </div>
            <div class="head-counter-bx">
                <h2 class="m-b5 counter"><?php
                    $sql = "select * from  success_stories ";
                    $array_var = array();
                    echo $success_stories = $class->count($Data_communication, $sql, $array_var);
                    ?></h2>
                <h6 class="fw3">قصة نجاح</h6>
            </div>
        </div>
        <div class="row sp20">
            <?php
            $query = "select * from  specialty ORDER BY `specialty`.`id` DESC limit 8;";
            $array = array();
            $rows = $class->sql_feth($Data_communication, $query, $array);
            if (count($rows) > 0) :
                foreach ($rows as $value):
                    $id = $value['id'];
                    $Specialty = $value['Specialty'];
                    $Icon = $value['Icon'];
                    ?>    
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="icon-bx-wraper">
                            <div class="icon-content">
                                <div class="icon-md text-primary m-b20"><i class="<?php echo $Icon; ?>"></i></div>
                                <a href="job-list.php?key=<?php echo $id; ?>"class="dez-tilte"><?php echo $Specialty; ?></a>
                                <p class="m-a0"><?php
                                    $sql = "select * from job where specialty = ? AND Acceptance = 1";
                                    $array_var = array($id);
                                    echo $job = $class->count($Data_communication, $sql, $array_var);
                                    ?> وظيفة متاحة</p>
                                <div class="rotate-icon"><i class="<?php echo $Icon; ?>"></i></div> 
                            </div>
                        </div>				
                    </div>
                    <?php
                endforeach;
            endif;
            ?>
            <div class="col-lg-12 text-center m-t30">
                <a href="jobs.php"><button class="site-button radius-xl">كل الأقسام</button><a/>
            </div>
        </div>
    </div>
</div>