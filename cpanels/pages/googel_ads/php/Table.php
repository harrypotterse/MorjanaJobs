<tbody>
    <tr>
        <?php
        $query = "select * from  googel_ads ORDER BY `googel_ads`.`id` DESC ";
        $array = array();
        $rows = $class->sql_feth($Data_communication, $query, $array);
        if (count($rows) > 0) :
            foreach ($rows as $value):
                $id = $value['id'];
                $ads = $value['ads'];
                $Page = $value['Page'];
                $Location = $value['Location'];
                $Activation = $value['Activation'];
                $ar = $value['ar'];

                $Location = $value['Location'];
                if ($Location == "Bottom"):
                    $Location = "الفوتر";
                endif;
                if ($Location == "side1"):
                    $Location = "جانبي (1)";
                endif;
                if ($Location == "side2"):
                    $Location = "جانبي (2)";
                endif;
                if ($Location == "Upper"):
                    $Location = "الهيدر";
                endif;
                ?>
                <td id="op">
                    <div class="btn-group">
                        <button type="button" class="btn btn-info"> <li class="fa fa-database"></li></button>
                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="Modify.php?id=<?php echo $id; ?>">التعديل</a></li>
                            <li><a href="#" id="<?php echo $id; ?>" class="del">والحذف</a></li>
        <!--                             <li><a href="#" id="<?php //echo $id;    ?>" Image="<?php //echo $Image;    ?>" >والحذف</a></li>-->
                        </ul>
                    </div>
                </td>
                <td><?php echo $Location; ?></td>
                <td><?php echo $ar; ?></td>
                <td><?php echo $ads; ?></td>
                <td><?php echo $id; ?></td>
            </tr>
            <?php
        endforeach;
    endif;
    ?>
</tbody>