<tbody>
    <tr>
        <?php
        $query = "select * from  use_site  ORDER BY `use_site`.`id` DESC ";
        $array = array();
        $rows = $class->sql_feth($Data_communication, $query, $array);
        if (count($rows) > 0) :
            foreach ($rows as $value):
                $id = $value['id'];
                $Title = $value['Title'];
                $Subject = $value['Subject'];
                ?>
                <td id="op">
                    <div class="btn-group">
                        <button type="button" class="btn btn-info"> <li class="fa fa-database"></li></button>
                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="Modify.php?id=<?php echo  $id ; ?>">التعديل</a></li>
                            <li><a href="#" id="<?php echo $id; ?>" class="del">والحذف</a></li>
        <!--                             <li><a href="#" id="<?php //echo $id;   ?>" Image="<?php //echo $Image;   ?>" >والحذف</a></li>-->
                        </ul>
                    </div>
                </td>
                <td><?php echo $Subject; ?></td>
                <td><?php echo $Title; ?></td>
                <td><?php echo $id; ?></td>
            </tr>
            <?php
        endforeach;
    endif;
    ?>
</tbody>