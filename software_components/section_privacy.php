<section class="faq ls s-pt-20 s-pb-50 s-py-lg-50 faq1">
    <div class="container">
        <div class="row">
            <?php
            $query = "select * from  privacy ORDER BY `privacy`.`id` DESC ;";
            $array = array();
            $rows = $class->sql_feth($Data_communication, $query, $array);
            if (count($rows) > 0) :
                foreach ($rows as $value):
                    $id = $value['id'];
                    $Title = $value['Title'];
                    $Subject = $value['Subject'];
              
            ?>
            <h2><?php echo  $Title ; ?></h2>
            <p><?php echo  $Subject ; ?>
            </p>
            <?php
          endforeach;
            endif;
        ?>

        </div>
    </div>
</section>