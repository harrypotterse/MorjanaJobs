<?php
define('classcss', 'img-thumbnail');
define("width", "100");
define("Certain", "#");
?>
<tbody>
    <tr>
        <?php
        $query = "select * from  job  where Acceptance = ?   ORDER BY `job`.`Views` DESC ";
        $array = array("1");
        $rows = $class->sql_feth($Data_communication, $query, $array);
        if (count($rows) > 0) :
            $Ranking = 0;
            foreach ($rows as $value):
                $Ranking++;
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
                $SQL = "UPDATE `job` SET `Ranking`= ? WHERE `job`.`id`= ?;";
                $array = array($Ranking,$id);
                $class->sql($Data_communication, $SQL, $array);
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
                            <li><a href="#" id="<?php echo $id; ?>"  Image="<?php echo $Image; ?>"  class="del">والحذف</a></li>
                            <li><a href="Modify.php?id=<?php echo $id; ?>">عرض البيانات</a></li>
                        </ul>
                    </div>
                </td>
                <td><a href="../../../Public/job/<?php echo $File; ?>" class="btn  btn-info" target="blank">ملف السيرة الذاتية</a></td>
                <td><?php echo $City; ?></td>
                <td><?php echo $Country; ?></td>
                <td><?php echo $specialty; ?></td>
                <td><?php echo $Keywords; ?></td>
                <td><?php echo $Company; ?></td>
                <td><?php echo $Title; ?></td>
                <td><img src="<?php echo $url; ?> " class="img-responsive" alt="Cinque Terre"></td>
                <td><?php echo $id; ?></td>
            </tr>
            <?php
        endforeach;
    endif;
    ?>
</tbody>