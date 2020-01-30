<div class="section-full bg-white content-inner-2">
    <div class="container">
        <div class="d-flex job-title-bx section-head">
            <div class="mr-auto">
                <h2 class="m-b5">اخر الاضافات</h2>
                <h6 class="fw4 m-b0">اكثر من 20 وظيفه جديده تم اضافتها</h6>
            </div>
            <div class="align-self-end">
                <a href="job-list.php" class="site-button button-sm">كل الوظائف<i class="fa fa-long-arrow-right"></i></a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9">
                <ul class="post-job-bx browse-job">
                    <?php
                    $query = "select * from  job  where Acceptance = 1   ";
                    $array = array();
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
                            $array_keyword = explode(",", $Keywords);
                            if ($Minimum === "غير محدد"):
                                $totel = "غير محدد";
                            else:
                                $totel = "$Minimum-$Maximum";

                            endif;
                            $Page = password_hash("job", PASSWORD_DEFAULT);
                            // $Page = password_hash("job", PASSWORD_DEFAULT);
                            if ($User_type === "user") {
                                $url = "images/favicon.png";
                                $Email_has = "mailto:$Email";
                                $Email = "<i class='fa fa-envelope-o'></i>$Email";
                                $affi = "company-profile.php?id=$id_user&Page=<?php echo $Page";
                            } else {
                                $url;
                                $Email_has = "company-profile.php?id=$id_user&Page=$Page";
                                $Email = "<bayt >bayt.com<bayt>";
                                $affi = $affiliate->Affiliate;
                            }
                            ?>
                            <li>
                                <div class="post-bx">
                                    <div class="job-post-info m-a0">
                                        <span><img  style="float: left;width: 9%;"alt="" width="150" src="<?php echo $url; ?>"/></span>
                                        <h4><a class="Title" id="<?php echo $id; ?>" href="<?php echo $affiliate->Affiliate; ?>"><?php echo $Title; ?></a></h4>
                                        <ul>

                                            <li><a href="company-profile.php?id=<?php echo $id_user; ?>&Page=<?php echo $Page ?>">@<?php echo $Company; ?></a></li>
                                            <li><i class="fa fa-map-marker"></i> <?php echo $City; ?> - <?php echo $Country; ?></li>
                                            <li><i class="fa fa-money"></i><?php echo $totel; ?></li>
                                            <li> <?php echo $Email; ?></li>
                                        </ul>
                                        <div class="job-time m-t15 m-b10">
                                            <?php
                                            foreach ($array_keyword as $val):
                                                if (!empty($val)):
                                                    $val = str_replace("undefined", "", $val);
                                                    echo " <a href='javascript:void(0);'><span>$val</span></a>";
                                                endif;

                                            endforeach;
                                            ?>
                                        </div>
                                        <div class="posted-info clearfix">
                                            <p class="m-tb0 text-primary float-left" style="direction: initial;font-size: 13px;margin-top: 6px;"><span class="text-black m-r10" >Posted since:&nbsp;</span> <?php echo $class->time_since($Today); ?></p>
                                            <?php
                                            if ($User_type === "user") {
                                                ?>
                                                <a href="<?php echo $Email_has; ?>" class="site-button button-sm float-right">التقدم عن طريق الأيميل </a>

                                                <?php
                                            } else {
                                                ?>
                                                <a href="informations.php?id=<?php echo $id; ?>&Page=<?php echo $Page; ?>" class="site-button button-sm float-right" ><i class="fa fa-download"></i> معلومات عن الوظيفه</a>
                                                <?php
                                            }
                                            ?>
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
            <div class="col-lg-3">
                <?php
                $query = "select * from  googel_ads  where Page= 'index' and Location= 'side1'  ";
                $array = array();
                $rows = $class->sql_feth($Data_communication, $query, $array);
                if (count($rows) > 0) :
                    foreach ($rows as $value):
                        $id = $value['id'];
                        echo $ads = $value['ads'];
                        $Page = $value['Page'];
                        $Location = $value['Location'];
                    endforeach;
                endif;
                ?>

                <?php
                $query = "select * from  googel_ads  where Page= 'index' and Location= 'side2'  ";
                $array = array();
                $rows = $class->sql_feth($Data_communication, $query, $array);
                if (count($rows) > 0) :
                    foreach ($rows as $value):
                        $id = $value['id'];
                        echo $ads = $value['ads'];
                        $Page = $value['Page'];
                        $Location = $value['Location'];
                    endforeach;
                endif;
                ?>
            </div>
        </div>
    </div>
</div>