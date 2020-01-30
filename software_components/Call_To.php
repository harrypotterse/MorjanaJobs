<div class="section-full p-tb70 overlay-black-dark text-white text-center bg-img-fix" style="background-image:url(images/background/bg4.jpg);">
    <div class="container">
        <div class="section-head text-center text-white">
            <h2 class="m-b5">قصص نجاح</h2>
            <h5 class="fw4">تعرف علي قصص النجاح</h5>
        </div>
        <div class="blog-carousel-center owl-carousel owl-none">
            <?php
            $query = "select * from  success_stories ORDER BY `success_stories`.`id` DESC ;";
            $array = array();
            $rows = $class->sql_feth($Data_communication, $query, $array);
            if (count($rows) > 0) :
                foreach ($rows as $value):
                    $id = $value['id'];
                    $comment = $value['comment'];
                    $Image = $value['Image'];
                    $Name = $value['Name'];
                    $Function = $value['Function'];
                    ?>
                    <div class="item">
                        <div class="testimonial-5">
                            <div class="testimonial-text">
                                <p><?php echo $comment; ?></p>
                            </div>
                            <div class="testimonial-detail clearfix">
                                <div class="testimonial-pic radius shadow">
                                    <img src="Public/success_stories/<?php echo $Image; ?>" width="100" height="100" alt="">
                                </div>
                                <strong class="testimonial-name"><?php echo $Name; ?></strong> 
                                <span class="testimonial-position"><?php echo $Function; ?></span> 
                            </div>
                        </div>
                    </div>
                    <?php
                endforeach;
            endif;
            ?>
        </div>
    </div>
</div>