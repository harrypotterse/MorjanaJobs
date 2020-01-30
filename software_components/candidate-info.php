<div class="col-lg-12 col-md-12 candidate-info">
    
    <div class="candidate-detail text-center job-bx bg-white m-b30" id="resume_headline_bx">

        <div class=" browse-job text-left">
 
            <h4 class="m-b0"><?php echo $Name; ?>
                <?php
               
                if(strcasecmp($id_session, $id) == 0):
                    ?>
                    <a class="m-l15 font-16 " data-toggle="modal" data-target="#profilename" href="#">
                        <i class="fa fa-pencil"></i></a>
                    <?php
                else :
                endif;
                ?>
            </h4>
         
            <p class="m-b15"><?php echo $Function; ?></p>
            <ul class="clearfix">
                <li><i class="ti-location-pin"></i><?php echo $Country; ?> - <?php echo $City; ?></li>
                <li><i class="ti-mobile"></i> <?php echo $mobile; ?></li>
                <li><i class="ti-briefcase"></i> <?php echo $Age; ?> سنه</li>
                <li><i class="ti-email"></i> i<?php echo $Mail; ?></li>
                <li><?php echo $Specialty; ?></li>
                <li><?php echo $College; ?></li>
                <li> <?php echo $Degree; ?></li>
            </ul>
        </div>
    </div>
</div>