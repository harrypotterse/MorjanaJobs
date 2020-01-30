<section class="faq ls s-pt-20 s-pb-50 s-py-lg-50 faq1">
    <div class="container">
        <div class="row">
            <div class="divider-55 d-none d-xl-block"></div>
            <div class="col-lg-12 m-auto ds-collapse">
                <?php
                $query = "select * from  faq ORDER BY `faq`.`id` DESC ;";
                $array = array();
                $rows = $class->sql_feth($Data_communication, $query, $array);
                if (count($rows) > 0) :
                    foreach ($rows as $value):
                        $id = $value['id'];
                        $Title = $value['Title'];
                        $Subject = $value['Subject'];
                        ?>
                        <div id="accordion01" role="tablist">

                            <div class="card">
                                <div class="card-header" role="tab" id="collapse0<?php echo $id; ?>_header">
                                    <h5>
                                        <a data-toggle="collapse" href="#collapse0<?php echo $id; ?>" aria-expanded="true" aria-controls="collapse0<?php echo $id; ?>">
                                            <?php echo $Title; ?>
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse0<?php echo $id; ?>" class="collapse show" role="tabpanel" data-parent="#accordion0<?php echo $id; ?>">
                                    <div class="card-body">
                                        <?php echo $Subject; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    endforeach;
                endif;
                ?>
                <!-- collapse -->
            </div>
            <div class="divider-90 d-none d-xl-block"></div>
        </div>
    </div>
</section>