    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 d-flex text-center">
                                <div class="text-white max-w400 text-center options">
                                    <div class="logo">
                                        <a href="index.php"><img src="images/logo.png" alt=""></a>
                                    </div>
                                    <h2 class="m-b10"><?php echo $options->statement1; ?></h2>
                                    <p class="m-b30"><?php echo $options->statement2; ?></p>
                                    <a href="post-jobs.php" class="site-button blue m-t20 outline outline-2 radius-xl">أضافه وظيفة</a>
                                    <?php
                        $user = $session->get_session_data("id");
                         if (count_comant($Data_communication, $user)):
                            else: 
                        ?>
                                    <a href="emploee-profile.php" class="site-button green m-t20 outline outline-2 radius-xl">أضافة سيره ذاتية</a>
                                    <?php
                          endif;           
                        ?>
                                    <ul class="list-inline m-a0">
                                        <li><a href="<?php echo $options->statement3; ?>" class="m-r10 text-white"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="<?php echo $options->statement4; ?>" class="m-r10 text-white"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="<?php echo $options->statement5; ?>" class="m-r10 text-white"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="<?php echo $options->statement6; ?>" class="m-r10 text-white"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="<?php echo $options->statement7; ?>" class="m-r10 text-white"><i class="fa fa-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>