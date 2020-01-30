<?php
define('classcss', 'img-thumbnail');
define("width", "100");
define("Certain", "#");
?>
<tbody>
    <tr>
        <?php
        $query = "select * from  specialty where   ORDER BY `specialty`.`id` DESC";
        $array = array();
        $rows = $class->sql_feth($Data_communication, $query, $array);
        if (count($rows) > 0) :
            foreach ($rows as $value):
                $id = $value['id'];
                $Specialty = $value['Specialty'];
                $Icon = $value['Icon'];
                ?>
                <td id="op">
                    <div class="btn-group">
                        <button type="button" class="btn btn-info"> <li class="fa fa-database"></li></button>
                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                                  <li><a href="Modify.php?id=<?php echo $id;  ?>">التعديل</a></li>
                            <li><a href="#" id="<?php echo $id; ?>"  Image="<?php echo $Image; ?>"  class="del">والحذف</a></li>
                        </ul>
                    </div>

                </td>


                <td><a href="#" class=" btn btn-info btn-lg"  ><?php echo  $Icon ; ?></a></td>
                <td> <span class="label label-success"><?php echo  $Specialty ; ?></td>
                <td><span class="badge"><?php echo $id; ?></td>
            </tr>
            <?php
        endforeach;
    endif;
    ?>
</tbody>