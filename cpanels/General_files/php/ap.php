

<div class="box-header" >
    <h3 class="box-title"><?php echo Page; ?></h3>
</div>
<div class="box-body" style="float: right;">
    <a class="btn btn-app">
        <?php
        $sql = "select * from  contact  where Notifications = 0";
        $array_var = array();
        $contact = $a->count($Data_communication, $sql, $array_var);
        ?>
        <span class="badge bg-yellow">3</span>
        <i class="fa fa-bullhorn"></i> الرسائل الجديدة
    </a>
    <a class="btn btn-app">
        <?php
        $sql = "select * from  job ";
        $array_var = array();
        $job = $a->count($Data_communication, $sql, $array_var);
        ?>
        <span class="badge bg-green"><?php
            echo $job;
            ?></span>
        <i class="fa fa-barcode"></i> اجمالي الوظائف
    </a>
    <a class="btn btn-app">
        <?php
        $sql = "select * from  registration ";
        $array_var = array();
        $registration = $a->count($Data_communication, $sql, $array_var);
        ?>
        <span class="badge bg-purple"><?php echo $registration; ?></span>
        <i class="fa fa-users"></i>مستخدمين الموقع
    </a>
    <a class="btn btn-app">
        <?php
        $sql = "select * from  user_admin ";
        $array_var = array();
        $user_admin = $a->count($Data_communication, $sql, $array_var);
        ?>
        <span class="badge bg-purple"><?php echo $user_admin; ?></span>
        <i class="fa fa-users"></i> مستخدمين لوحة التحكم
    </a>
    <a class="btn btn-app">
        <?php
        $sql = "select * from  job where Acceptance = 0  ";
        $array_var = array();
        $job = $a->count($Data_communication, $sql, $array_var);
        ?>  
        <span class="badge bg-teal"><?php
            echo $job;
            ?></span>
        <i class="fa fa-inbox"></i> الوظائف الجديدة
    </a>
    <a class="btn btn-app">
        <?php
        $sql = "select * from  contact  where Notifications = 0";
        $array_var = array();
        $contact = $a->count($Data_communication, $sql, $array_var);
        ?> 
        <span class="badge bg-aqua"><?php echo $contact; ?></span>
        <i class="fa fa-envelope"></i> رسائل البريد
    </a>
    <a class="btn btn-app">
        <?php
        $sql = "select * from  cv where Acceptance = 0  ";
        $array_var = array();
        $cv = $a->count($Data_communication, $sql, $array_var);
        ?>  
        <span class="badge bg-red"><?php echo $cv; ?></span>
        <i class="fa fa-heart-o"></i> السيرة الذاتية
    </a>
</div><!-- /.box-body -->

