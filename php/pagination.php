<?php
require_once '../Classes/Achieve.php';
require_once '../FileConnection/Data_connection.php';
require_once '../Classes/Session.php';
$class = new Achieve();
$Session = new Session('login.php');
$limit = 10;
$page = isset($_POST['pag']) ? $_POST['pag'] : 1;
$start = ($page - 1) * $limit;
$query = "SELECT * FROM cv  LIMIT $start, $limit ";
$array = array($start, $limit);
$rows = $class->sql_feth($Data_communication, $query, $array);
if (count($rows) > 0) :
    foreach ($rows as $value):
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
        $Page = password_hash("cv", PASSWORD_DEFAULT);
        ?>
        <li>
            <div class="d-flex float-left">
                <div class="job-post-company">
                    <a href="javascript:void(0);"><span>
                            <img alt="" src="images/favicon.png"/>
                        </span></a>
                </div>
                <div class="job-post-info">
                    <h6><a href="javascript:void(0);"><?php echo $Name; ?></a></h6>
                    <ul>
                        <li><i class="fa fa-map-marker"></i> <?php echo $Country; ?> - <?php echo $City; ?></li>
                        <li><i class="fa fa-bookmark-o"></i> <?php echo $College; ?></li>
                        <li><i class="fa fa-envelope-o"></i> <?php echo $Mail; ?></li>
                        <li><i class="fa fa-phone"></i> <?php echo $mobile; ?></li>
                    </ul>
                </div>
            </div>
            <div class="job-links action-bx">
                <a href="Public/cv/<?php echo $Files; ?>" target="blank"><i class="fa fa-download"></i></a>
                <a href="cv-profile.php?id=<?php echo $id; ?>?&Page=<?php echo $Page; ?>" target="blank" class="red"><i class="fa fa-eye"></i></a>
            </div>
        </li>
        <?php
    endforeach;
                        endif;