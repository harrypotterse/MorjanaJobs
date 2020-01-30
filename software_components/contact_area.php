<div class="content-block">
    <!-- Browse Jobs -->
    <?php
    $search_keyword = '';
    if (!empty($_POST['search']['keyword'])) {
        $search_keyword = $_POST['search']['keyword'];
        $sql = 'SELECT * FROM job WHERE    Acceptance = 1 AND  Title  LIKE :keyword OR Company  LIKE :keyword OR Keywords  LIKE :keyword OR Minimum  LIKE :keyword OR Maximum  LIKE :keyword OR specialty  LIKE :keyword  OR Country  LIKE :keyword  OR City  LIKE :keyword    ORDER BY id DESC ';
    } else {

        $search_keyword = " ";
        (int) $as = filter_var($_GET['key'], FILTER_SANITIZE_NUMBER_INT);
        if (!empty(filter_var($_GET['key'], FILTER_SANITIZE_STRING)) and ! filter_var($as, FILTER_VALIDATE_INT)):
            $search_keyword = $_GET['key'];
            $sql = 'SELECT * FROM job WHERE Acceptance = 1 AND Country  LIKE :keyword    ORDER BY id DESC ';
        elseif (filter_var($as, FILTER_VALIDATE_INT)) :

            $search_keyword = filter_var($_GET['key'], FILTER_SANITIZE_NUMBER_INT);
            $sql = 'SELECT * FROM job WHERE Acceptance = 1 AND  specialty  LIKE :keyword   ORDER BY id DESC ';
        else :
            $search_keyword = "";
            $sql = 'SELECT * FROM job WHERE   Acceptance = 1  ORDER BY id DESC ';

        endif;
    }
    $per_page_html = '';
    $self = $_SERVER['PHP_SELF'];
    $page = 1;
    $start = 0;
    if (!empty($_POST["page"])) {
        $page = $_POST["page"];
        $start = ($page - 1) * ROW_PER_PAGE;
    }
    $page;
    $limit = " limit " . $start . "," . ROW_PER_PAGE;
    $pagination_statement = $Data_communication->prepare($sql);
    $pagination_statement->bindValue(':keyword', '%' . $search_keyword . '%', PDO::PARAM_STR);
    $pagination_statement->execute();
    $current_page = 1;
    $row_count = $pagination_statement->rowCount();
    if (!empty($row_count)) {
        $per_page_html .= "<div style='text-align:center;margin:20px 0px;'>";
        $page_count = ceil($row_count / ROW_PER_PAGE);
        if ($page_count > 1) {
            for ($i = 1; $i <= $page_count; $i++) {
                if ($i == $page) {
                    $per_page_html .= '<input type="submit" name="page" value="' . $i . '" class="btn-page current" />';
                } else {
                    $per_page_html .= '<input type="submit" name="page" value="' . $i . '" class="btn-page" />';
                }
            }
        }
        $per_page_html .= "</div>";
    }
    $query = $sql . $limit;
    $pdo_statement = $Data_communication->prepare($query);
    $pdo_statement->bindValue(':keyword', '%' . $search_keyword . '%', PDO::PARAM_STR);
    $pdo_statement->execute();
    $result = $pdo_statement->fetchAll();
    ?>
    <div class="section-full browse-job p-b50">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8 col-md-7">
                    <div class="job-bx-title clearfix">
                        <h5 class="font-weight-700 pull-left text-uppercase">
                            <?php
                            if (!empty($_POST['search']['keyword'])) {
                                if ($row_count >= 1):
                                    echo 'عدد نتئج البحث  ' . $row_count;
                                else:
                                    echo ' لايوجد نتائج للبحث';
                                endif;
                            } else {
                                if (!empty($_GET['key'])) {
                                    if ($row_count >= 1):
                                        echo 'عدد نتئج البحث  ' . $row_count;
                                    else:
                                        echo ' لايوجد نتائج للبحث';
                                    endif;
                                }
                            }
                            ?>
                        </h5>
                    </div>
                    <ul class="post-job-bx">
                        <?php
                        foreach ($result as $value):
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
                            if ($User_type === "user") {
                                $url = "images/favicon.png";
                                $Email_has = "mailto:$Email";
                                $Email = "<i class='fa fa-envelope-o'></i>$Email";
                                $affi = "company-profile.php?id=$id_user&Page=$Page";
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
                                        <h4><a class="Title" id="<?php echo $id; ?>" href="<?php echo $affi; ?>"><?php echo $Title; ?></a></h4>
                                        <ul>

                                            <li><a href="<?php echo $affi; ?>">@<?php echo $Company; ?></a></li>
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
                                                <a href="<?php echo $Email_has; ?>" class="site-button button-sm float-right">طلب الوظيفة</a>

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
                        ?>
                    </ul>
                    <?php echo $per_page_html; ?>
                    </form>

                </div>
                <div class="col-xl-3 col-lg-4 col-md-5">
                    <div class="sticky-top">
                        <?php echo googel_ads($Data_communication, "job-list", "side1"); ?>
                        <?php echo googel_ads($Data_communication, "job-list", "side2"); ?>      
                        <!--                        <ul class="company-logo-wg sidebar bg-white job-bx m-b30 clearfix">
                                                    <li class="brand-logo">
                                                        <a href="javascript:void(0);">
                                                            <img src="images/logo/logo1.jpg" alt="">
                                                        </a>
                                                    </li>
                                                    <li class="brand-logo">
                                                        <a href="javascript:void(0);">
                                                            <img src="images/logo/logo2.jpg" alt="">
                                                        </a>
                                                    </li>
                                                    <li class="brand-logo">
                                                        <a href="javascript:void(0);">
                                                            <img src="images/logo/logo3.jpg" alt="">
                                                        </a>
                                                    </li>
                                                    <li class="brand-logo">
                                                        <a href="javascript:void(0);">
                                                            <img src="images/logo/logo4.jpg" alt="">
                                                        </a>
                                                    </li>
                                                    <li class="brand-logo">
                                                        <a href="javascript:void(0);">
                                                            <img src="images/logo/logo5.jpg" alt="">
                                                        </a>
                                                    </li>
                                                    <li class="brand-logo">
                                                        <a href="javascript:void(0);">
                                                            <img src="images/logo/logo6.jpg" alt="">
                                                        </a>
                                                    </li>
                                                    <li class="brand-logo">
                                                        <a href="javascript:void(0);">
                                                            <img src="images/logo/logo7.jpg" alt="">
                                                        </a>
                                                    </li>
                                                    <li class="brand-logo">
                                                        <a href="javascript:void(0);">
                                                            <img src="images/logo/logo8.jpg" alt="">
                                                        </a>
                                                    </li>
                                                    <li class="brand-logo">
                                                        <a href="javascript:void(0);">
                                                            <img src="images/logo/logo9.jpg" alt="">
                                                        </a>
                                                    </li>
                                                </ul>								-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Browse Jobs END -->
</div>