<?php
define('classcss', 'img-thumbnail');
define("width", "100");
define("Certain", "#");
?>
<tbody>
    <tr>
        <?php
        $query = "select * from  cv ORDER BY `cv`.`Views` DESC ;";
        $array = array();
        $Ranking = 0;
        $rows = $class->sql_feth($Data_communication, $query, $array);
        if (count($rows) > 0) :
            foreach ($rows as $value):
                $Ranking++;
                $id = $value['id'];
                $Name = $value['Name'];
                $Age = $value['Age'];
                $mobile = $value['mobile'];
                $Mail = $value['Mail'];
                $Country = $value['Country'];
                $City = $value['City'];
                $Degree = $value['Degree'];
                $College = $value['College'];
                $Function = $value['Function'];
                $Specialty = $value['Specialty'];
                $Description = $value['Description'];
                $Date = $value['Date'];
                $day = $value['day'];
                $Month = $value['Month'];
                $Files = $value['Files'];
                $Views = $value['Views'];
                $Acceptance = $value['Acceptance'];
                $user = $value['user'];
                $SQL = "UPDATE `cv` SET `Ranking`= ? WHERE `cv`.`id`= ?;";
                $array = array($Ranking, $id);
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
                            <li><a href="#" id="<?php echo $id; ?>"  Image="<?php echo $Files; ?>"  class="del">والحذف</a></li>
                        </ul>
                    </div>
                </td>
                <td><a href="../../../Public/cv/<?php echo $Files; ?>" class="btn  btn-info" target="blank">ملف السيرة الذاتية</a></td>
                <td><?php echo $City; ?></td>
                <td><?php echo $Country; ?></td>
                <td><?php echo $Views; ?></td>
                <td><?php echo $mobile; ?></td>
                <td><?php echo $Age; ?></td>
                <td><?php echo $Name; ?></td>
                <td><?php echo $id; ?></td>
            </tr>
            <?php
        endforeach;
    endif;
    ?>
</tbody>





