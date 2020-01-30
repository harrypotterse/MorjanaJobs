<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">  
             <div class="pull-left image">
                 <img src="a.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo $session->get_session_data("users"); ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-list-ul"></i>
                    <span>أهم الصفحات</span> 
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="../rules/spreadsheet.php"><i class="fa fa-circle-o"></i> الشروط والأحكام</a></li>
                    <li class="active"><a href="../contact/spreadsheet.php"><i class="fa fa-circle-o"></i> التواصل</a></li>
                    <li class="active"><a href="../faq/spreadsheet.php"><i class="fa fa-circle-o"></i> الأسئلة الشائعة</a></li>
                    <li class="active"><a href="../privacy/spreadsheet.php"><i class="fa fa-circle-o"></i> سياسة الخصوصية</a></li>
                    <li class="active"><a href="../use_site/spreadsheet.php"><i class="fa fa-circle-o"></i> كيفيه استخدام الموقع</a></li>
                 
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-home"></i>
                    <span>الرئسية</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="../success_stories/spreadsheet.php"><i class="fa fa-circle-o"></i> قصص نجاح</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-th"></i>
                    <span>مكونات الصفحات</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>             
                <ul class="treeview-menu">
                    <li><a href="../Footer/Modify.php"><i class="fa fa-circle-o"></i> الفوتر</a></li>
                    <li><a href="../Contact_page/Modify.php"><i class="fa fa-circle-o"></i> صفحة التواصل</a></li>
                    <li><a href="../options/Modify.php"><i class="fa fa-circle-o"></i> صفحة الاختيار</a></li>
                    <li><a href="../about/Modify.php"><i class="fa fa-circle-o"></i> معلومات عنا </a></li>
                    <li><a href="../login/Modify.php"><i class="fa fa-circle-o"></i> صفحة الدخول</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>الوظائف</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="../specialty/spreadsheet.php"><i class="fa fa-circle-o"></i> الاقسام</a></li>
                    <li><a href="../sections_bayt/spreadsheet.php"><i class="fa fa-circle-o"></i> الاقسام (بيت دوت كوم)</a></li>     
                    <li><a href="../job/spreadsheet.php"><i class="fa fa-circle-o"></i> الوظائف</a></li>
                    <li><a href="../job/rat_job.php"><i class="fa fa-circle-o"></i> افضل الوظائف</a></li>
                    <li><a href="../job_user/spreadsheet.php"><i class="fa fa-circle-o"></i> وظائف المستخدمين</a></li>
                    <li><a href="../affiliate/Modify.php"><i class="fa fa-circle-o"></i>رابط افليت</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-adn"></i>
                    <span>الاعلانات</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="../googel_ads/spreadsheet.php"><i class="fa fa-circle-o"></i> جوجل ادسنس</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#cv">
                    <i class="fa fa-pencil-square"></i>
                    <span>السيرة الذاتية</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="../cv/spreadsheet.php"><i class="fa fa-circle-o"></i> السيرة الذاتية</a></li>
                    <li><a href="../cv/rat_job.php"><i class="fa fa-circle-o"></i> افضل المواظفين</a></li>
                </ul>
            </li>
            <li class="header">LABELS</li>
            <li><a href="../home/spreadsheet.php"><i class="fa fa-circle-o text-aqua"></i> <span>الصفحة الرئسية</span></a></li>
            <li><a href="../latest_additions/spreadsheet.php"><i class="fa fa-circle-o text-red"></i> <span>اخر الاضافات</span></a></li>
            <li><a href="../counter_db/spreadsheet.php"><i class="fa fa-circle-o text-yellow"></i> <span>افضل الصفحات</span></a></li>
            <li><a href="../user_admin/spreadsheet.php"><i class="fa fa-circle-o text-aqua"></i> <span>مستخدمين لوحة التحكم</span></a></li>
                 <li><a href="?logout"><i class="fa fa-circle-o text-aqua"></i> <span>تسجيل الخروج</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
