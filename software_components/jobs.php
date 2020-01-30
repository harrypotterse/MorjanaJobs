<div class="section-full bg-white p-t50 p-b20">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-8 m-b30">
                <div class="job-bx-title clearfix">
                    <?php
                    if ($_GET['id'] == "00"):

                    endif;
                    $query = "select * from  registration ORDER BY `registration`.`id` DESC limit 1;";
                    $array = array();
                    $rows = $class->sql_feth($Data_communication, $query, $array);
                    if (count($rows) > 0) :
                        foreach ($rows as $value):
                            $id = $value['id'];
                            $forename = $value['forename'];
                            $last_name = $value['last_name'];
                            if ($_GET['id'] == "00"):
                                $forename = "Morjana Jobs";
                                $last_name = "";
                                $img = "images/prof.png";
                            else:
                                $forename = $value['forename'];
                                $last_name = $value['last_name'];
                                $img = "images/avatar1.png";
                            endif;
                            ?>
                            <div class="row">
                                <div class="col-sm-10">
                                    <h1 class="" style="background: #008fdc;width: 41%;padding: 2%;text-align: center;color: white;font-weight: 700;border: 3px solid white;box-shadow: 1px 2px #e0e2e0;">

                                        <?php echo $forename; ?>&nbsp; <?php echo $last_name; ?>

                                    </h1>
                                    <button type="button" class="btn btn-success">عدد الوظائف&nbsp;:&nbsp;
                                        <?php
                                        $sql = "select * from  job where id_user = ?  ";
                                        $array_var = array($id__);
                                        echo $job = $class->count($Data_communication, $sql, $array_var);
                                        ?>
                                    </button>
                                    <button type="button" class="btn btn-info">عدد الزيارات&nbsp;:&nbsp;<?php
                                        $query = "select SUM(Views) from  job  where id_user = ? ;";
                                        $array = array($id__);
                                        $rows = $class->sql_feth($Data_communication, $query, $array);
                                        if (count($rows) > 0) :
                                            foreach ($rows as $value):
                                                echo $value['SUM(Views)'];
                                            endforeach;
                                        endif;
                                        ?></button>
                                    <br>
                                </div>
                                <div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="<?php echo $img; ?>"></a>
                                </div>
                            </div>
                            <?php
                        endforeach;
                    endif;
                    ?>
                </div>
                <ul class="post-job-bx browse-job">
                    <?php
                    $query = "select * from  job where id_user = ?  ORDER BY `job`.`Views` DESC ;";
                    $array = array($id__);
                    $rows = $class->sql_feth($Data_communication, $query, $array);
                    if (count($rows) > 0) :
                        foreach ($rows as $value):
                            $id = $value['id'];
                            $Title = $value['Title'];
                            $Company = $value['Company'];
                            $Keywords = $value['Keywords'];
                            $Minimum = $value['Minimum'];
                            $Maximum = $value['Maximum'];
                            $specialty = $value['specialty'];
                            $Email = $value['Email'];
                            $Country = $value['Country'];
                            $City = $value['City'];
                            $Date = $value['Date'];
                            $Today = $value['Today'];
                            $Month = $value['Month'];
                            $File = $value['File'];
                            $User_type = $value['User_type'];
                            $Views = $value['Views'];
                            $Acceptance = $value['Acceptance'];
                            $url = $value['url'];
                            $id_user = $value['id_user'];
                            $array_keyword = explode(" ", $Keywords);
                            ?>
                            <li>
                                <div class="post-bx">
                                    <div class="job-post-info m-a0">
                                        <span><img  style="float: left;width: 9%;"alt="" width="150" src="<?php echo $url; ?>"/></span>
                                        <h4><a class="Title" id="<?php echo $id; ?>" href="<?php echo $affiliate->Affiliate; ?>"><?php echo $Title; ?></a></h4>
                                        <ul>

                                            <li><a href="#">@<?php echo $Company; ?></a></li>
                                            <li><i class="fa fa-map-marker"></i> <?php echo $City; ?> - <?php echo $Country; ?></li>
                                            <li><i class="fa fa-money"></i> <?php echo $Minimum; ?>$-<?php echo $Maximum; ?>$</li>
                                            <li><i class="fa fa-envelope-o"></i> <?php echo $Email; ?></li>
                                        </ul>
                                        <div class="job-time m-t15 m-b10">
                                            <?php
                                            foreach ($array_keyword as $val):
                                                echo " <a href='javascript:void(0);'><span>$val</span></a>";
                                            endforeach;
                                            ?>
                                        </div>
                                        <div class="posted-info clearfix">
                                            <p class="m-tb0 text-primary float-left" style="direction: initial;font-size: 13px;margin-top: 6px;"><span class="text-black m-r10" >Posted since:&nbsp;</span> <?php echo $class->time_since($Today); ?></p>
                                            <a href="mailto:<?php echo $Email; ?>" class="site-button button-sm float-right">طلب الوظيفة</a>
                                            <a href="Public/job/<?php echo $File; ?>" class="site-button button-sm float-right" target="blank"><i class="fa fa-download"></i> معلومات عن الوظيفه</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <?php
                        endforeach;
                    endif;
                    ?>
                </ul>

            </div>
            <div class="col-xl-3 col-lg-4 m-b30">
                <?php echo googel_ads($Data_communication, "company-profile", "side1"); ?>
                <?php echo googel_ads($Data_communication, "company-profile", "side2"); ?>     
            </div>
        </div>
    </div>
</div>