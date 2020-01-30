<?php
define('classcss', 'img-thumbnail');
define("width", "100");
define("Certain", "#");
?>
<tbody>
    <tr>
        <?php
        $query = "select * from  job  where Acceptance = ?   ORDER BY `job`.`id` DESC ";
        $array = array("0");
        $rows = $class->sql_feth($Data_communication, $query, $array);
        if (count($rows) > 0) :
            foreach ($rows as $value):
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
                ?>
                <td><a Acceptance="<?php echo $id; ?>"  class="btn  btn-danger btn-lg Acceptance" target="blank">قبول</a></td>
                <td><?php echo $City; ?></td>
                <td><?php echo $Country; ?></td>
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