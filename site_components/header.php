<header class="site-header mo-left header fullwidth">
    <!-- main header -->
    <div class="sticky-header main-bar-wraper navbar-expand-lg">
        <div class="main-bar clearfix">
            <div class="container clearfix">
                <!-- website logo -->
                <div class="logo-header mostion">
                    <a href="index.php"><img src="images/logo.png" class="logo" alt=""></a>
                </div>
                <!-- nav toggle button -->
                <!-- nav toggle button -->
                <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <!-- extra nav -->
                <div class="extra-nav">
                    <div class="extra-cell">
                        <?php
                        if ($session->session_exist__comp("user")):
                            ?>
                            <a href="?logout"  class="site-button"><i class="fa fa-lock"></i> تسجيل الخروج </a>
                                <?php
                                  if(count_comant($Data_communication, $session->get_session_data("id")) ):                  
                    ?>
                            <a href="cv-profile.php?id=<?php echo $id_user; ?>?&Page=<?php echo $Page_user; ?>" class="site-button"><i class="fa fa-user" ></i> <?php echo $Full_user; ?>&nbsp;&nbsp;</a>
                            <?php
                             endif;
                        else :
                            ?>
                            <a href="register.php" class="site-button"><i class="fa fa-user"></i> التسجيل</a>
                            <a href="login.php"  class="site-button"><i class="fa fa-lock"></i> الدخول </a>
                        <?php
                        endif;
                        ?>

                        <?php
                        if (!$session->session_exist__comp("user")):
                        else:
                            ?>
                            <a href="post-jobs.php" class="apply" >أضافة وظيف؟ </a>
                            <?php
                            $user = $session->get_session_data("id");
                            if (count_comant($Data_communication, $user)):
                            else:
                                ?>
                                <a href="emploee-profile.php" class="apply" >أضافة سيرة ذاتية؟ </a>
                            <?php
                            endif;
                        endif;
                        ?>
                    </div>
                </div>
                <!-- main nav -->
                <div class="header-nav navbar-collapse collapse justify-content-start" id="navbarNavDropdown">
                    <ul class="nav navbar-nav">
                        <li >
                            <a href="index.php">الرئيسية </a>
                        </li>
                        <li class="active">
                            <a href="about.php">عن الموقع </a>
                        </li>
                        <li>
                            <a href="job-list.php">البحث عن وظائف </a>
                        </li>
                        <li>
                            <a href="cvs.php">البحث عن موظفين</a>
                        </li>
                        <li>
                            <a href="contact.php">التواصل</a>
                        </li>
                    </ul>			
                </div>
            </div>
        </div>
    </div>
    <!-- main header END -->
</header>