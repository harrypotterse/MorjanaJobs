<?php
$html = file_get_html('https://www.bayt.com/ar/jobs/locations/');
?>
<div class="section-full content-inner bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 section-head text-center">
                <h2 class="m-b5">وظائف بيت.كوم</h2>
                <h6 class="fw4 m-b0">العديد من الوظائف المتاحة في البلاد العربية</h6>
            </div>
        </div>
        <div class="row">
            <?php
            $array = array();
            foreach ($html->find('.row.m20-d.p20-d.v-align-stretch.is-m') as $e):
                $e->plaintext . '<br>';
                $ar = explode("وظيفة ", $e->plaintext);
                for ($x = 0; $x < count($ar) - 1; $x++) {
                    $key2 = remove_words($ar[$x]);

                    $key = remove_words($ar[$x]);
                    $sql = "select * from  job where  Country  LIKE :keyword ";
                    (int) $a = count_like($Data_communication, $sql, trim($key));
                    if ($key === 'الهند') {
                        //images/city/c2.jpg
                        $bec = "images/city/c2.jpg";
                    } else if ($key === 'دولي') {
                        //images/city/c2.jpg
                        $bec = "images/city/c1.jpg";
                    } else if ($key === 'الهند') {
                        //images/city/c2.jpg
                        $bec = "images/city/c2.jpg";
                    } else if ($key === 'الإمارات العربية المتحدة') {
                        //images/city/c2.jpg
                        $bec = "images/city/c3.jpg";
                    } else if ($key === 'المملكة العربية السعودية') {
                        //images/city/c2.jpg
                        $bec = "images/city/c4.jpg";
                    } else if ($key === 'دبي') {
                        //images/city/c2.jpg
                        $bec = "images/city/c5.jpg";
                    } else if ($key === 'مصر') {
                        //images/city/c2.jpg
                        $bec = "images/city/c6.jpg";
                    } else if ($key === 'قطر') {
                        //images/city/c2.jpg
                        $bec = "images/city/c7.jpg";
                    } else if ($key === 'الكويت') {
                        //images/city/c2.jpg
                        $bec = "images/city/c8.jpg";
                    } else if ($key === 'سريلانكا') {
                        //images/city/c2.jpg
                        $bec = "images/city/c9.jpg";
                    } else if ($key === 'المغرب') {
                        //images/city/c2.jpg
                        $bec = "images/city/c10.jpg";
                    } else if ($key === 'البحرين') {
                        //images/city/c2.jpg
                        $bec = "images/city/c11.jpg";
                    } else if ($key === 'الأردن') {
                        //images/city/c2.jpg
                        $bec = "images/city/c12.jpg";
                    } else if ($key === 'العراق') {
                        //images/city/c2.jpg
                        $bec = "images/city/c13.jpg";
                    } else if ($key === 'عمان') {
                        //images/city/c2.jpg
                        $bec = "images/city/c14.jpg";
                    } else if ($key === 'لبنان') {
                        //images/city/c2.jpg
                        $bec = "images/city/c15.jpg";
                    } else if ($key === 'باكستان') {
                        //images/city/c2.jpg
                        $bec = "images/city/c16.jpg";
                    } else if ($key === 'الجزائر') {
                        //images/city/c2.jpg
                        $bec = "images/city/c17.jpg";
                    } else if ($key === 'تونس') {
                        //images/city/c2.jpg
                        $bec = "images/city/c18.jpg";
                    }
                    ?>
                    <?php
                    if ($a > 0):
                        ?>
                        <div class="col-lg-3 col-sm-6 col-md-6 m-b30">
                            <a href="job-list.php?key=<?php echo $key; ?>">
                                <div class="city-bx align-items-end  d-flex"  style="background-image:url(<?php echo $bec; ?>)">
                                    <div class="city-info">
                                        <h5><?php echo $key ?></h5>
                                        <span><?php
            $sql = "select * from  job where  Country  LIKE :keyword ";

            echo count_like($Data_communication, $sql, trim($key));
//                                        preg_match_all('/[0-9]+/', $ar[$x], $matches);
//                                        echo $var = implode(' ', $matches[0]);
                        ?> وظيفة متاحة</span>
                                    </div>
                                </div>
                            </a>
                        </div>
            <?php
        endif;
    }
endforeach;
?>
            <!--            <div class="col-lg-3 col-sm-6 col-md-6 m-b30">
                            <a href="javascript:void(0);">
                                <div class="city-bx align-items-end  d-flex" style="background-image:url(images/city/pic2.jpg)">
                                    <div class="city-info">
                                        <h5>الامارات</h5>
                                        <span>352 وظيفة متاحة</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-md-6 m-b30">
                            <a href="javascript:void(0);">
                                <div class="city-bx align-items-end  d-flex" style="background-image:url(images/city/pic3.jpg)">
                                    <div class="city-info">
                                        <h5>السعودية</h5>
                                        <span>893 وظيفة متاحة</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-md-6 m-b30">
                            <a href="javascript:void(0);">
                                <div class="city-bx align-items-end  d-flex" style="background-image:url(images/city/pic4.jpg)">
                                    <div class="city-info">
                                        <h5>المغرب</h5>
                                        <span>502 وظيفة متاحة</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-md-6 m-b30">
                            <a href="javascript:void(0);">
                                <div class="city-bx align-items-end  d-flex" style="background-image:url(images/city/pic5.jpg)">
                                    <div class="city-info">
                                        <h5>عمان</h5>
                                        <span>765 وظيفة متاحة</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-md-6 m-b30">
                            <a href="javascript:void(0);">
                                <div class="city-bx align-items-end  d-flex" style="background-image:url(images/city/pic6.jpg)">
                                    <div class="city-info">
                                        <h5>الجزائر</h5>
                                        <span>352 وظيفة متاحة</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-md-6 m-b30">
                            <a href="javascript:void(0);">
                                <div class="city-bx align-items-end  d-flex" style="background-image:url(images/city/pic7.jpg)">
                                    <div class="city-info">
                                        <h5>فلسطين</h5>
                                        <span>893 وظيفة متاحة</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-md-6 m-b30">
                            <a href="javascript:void(0);">
                                <div class="city-bx align-items-end  d-flex" style="background-image:url(images/city/pic8.jpg)">
                                    <div class="city-info">
                                        <h5>الأردن</h5>
                                        <span>502 وظيفة متاحة</span>
                                    </div>
                                </div>
                            </a>
                        </div>-->
        </div>
    </div>
</div>