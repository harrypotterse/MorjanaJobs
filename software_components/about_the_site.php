 <div class="content-block">
                    <div class="section-full content-inner overlay-white-middle">
                        <div class="container">
                            <div class="row align-items-center m-b50">
                                <div class="col-md-12 col-lg-6 m-b20">
                                    <h2 class="m-b5"><?php echo $about->statement1; ?></h2>
                                    <h3 class="fw4"><?php echo $about->statement2; ?></h3>
                                    <p class="m-b15"><?php echo $about->statement3; ?></p>
                                    <a href="about.php" class="site-button">للمزيد</a>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <img src="<?php echo $about->statement4; ?>" alt=""/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12 m-b30">
                                    <div class="icon-bx-wraper p-a30 center bg-gray radius-sm">
                                        <div class=" text-primary m-b20"> <a href="#" ><img src="<?php echo $about->statement5; ?>" alt="morjana" /></a> </div>
                                        <div class="icon-content">
                                            <h5 class="dlab-tilte text-uppercase"><?php echo $about->statement6; ?>
                                            </h5>
                                            <p><?php echo $about->statement7; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 m-b30">
                                    <div class="icon-bx-wraper p-a30 center bg-gray radius-sm">
                                        <div class="text-primary m-b20"> <a href="#" class="icon-cell text-primary"><img src="<?php echo $about->statement8; ?>" alt="morjana" /></a> </div>
                                        <div class="icon-content">
                                            <h5 class="dlab-tilte text-uppercase"><?php echo $about->statement9; ?>
                                            </h5>
                                            <p><?php echo $about->statement10; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 m-b30">
                                    <div class="icon-bx-wraper p-a30 center bg-gray radius-sm">
                                        <div class="text-primary m-b20"> <a href="#" class="icon-cell text-primary"><img src="<?php echo $about->statement11; ?>" alt="morjana" /></a> </div>
                                        <div class="icon-content">
                                            <h5 class="dlab-tilte text-uppercase"><?php echo $about->statement12; ?></h5>
                                            <p><?php echo $about->statement13; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Why Chose Us -->
                    <!-- Call To Action -->
                    <div class="section-full content-inner-2 call-to-action overlay-black-dark text-white text-center bg-img-fix" style="background-image:url(images/background/bg4.jpg);">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2 class="m-b10"><?php echo $about->statement14; ?>
                                    </h2>
                                    <p class="m-b0"><?php echo $about->statement15; ?></p>
                                    <?php
                         if ($session->session_exist__comp("user")):
                             else:
                       
                        ?>
                                    <a href="register.php" class="site-button m-t20 outline outline-2 radius-xl"><?php echo $about->statement16; ?></a>
                                    <?php
                          endif;
                        ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>