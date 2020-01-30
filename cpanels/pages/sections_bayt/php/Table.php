<?php
define('classcss', 'img-thumbnail');
define("width", "100");
define("Certain", "#");
?>
<tbody>
    <tr>
        <?php
        $query = "select * from  sections_bayt ORDER BY `sections_bayt`.`id` DESC";
        $array = array();
        $rows = $class->sql_feth($Data_communication, $query, $array);
        if (count($rows) > 0) :
            foreach ($rows as $value):
                $id = $value['id'];
                $sections = $value['sections'];
                $url = $value['url'];
                $color = $value['color'];
                ?>
                <td id="op">
                    <div class="btn-group">
                        <button type="button" class="btn btn-info"> <li class="fa fa-database"></li></button>
                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
<!--                            <li><a href="Modify.php?id=<?php //echo $id; ?>">التعديل</a></li>-->
                            <li><a href="#" id="<?php echo $id; ?>"  Image="<?php echo $Image; ?>"  class="del">والحذف</a></li>
                        </ul>
                    </div>

                </td>


                <td><a href="<?php echo $url; ?>" class=" btn btn-primary" target="_blank">رابط  القسم</a></td>
                <td>  <span class="label label-primary" style="background: <?php echo  $color ; ?> !important;font-size: 14px;"><?php echo $sections; ?></td>
                <td><span class="badge"><?php echo $id; ?></td>
            </tr>
            <?php
        endforeach;
    endif;
    ?>
</tbody>