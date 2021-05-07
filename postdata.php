<?php
    session_start();
    require_once("includes/connection.php");

    $size = count($_POST);
    $rowsCount = ($size/6)-1; 

    for ($i = 0; $i <= $rowsCount; $i++) {
        
        $srclink    = $_POST['srcLink' . $i];
        $starttime  = $_POST['starttime' . $i];
        $endtime    = $_POST['endtime' . $i];
        $discription= $_POST['discription' . $i];
        $pic        = $_POST['preview' . $i];
        $username   = $_SESSION["session_username"];
        $stat_id    = 1;
        $user_id    = 0;
        $createDate = date('Y-m-d H:i:s');

        $result = $mysql->query("SELECT id FROM `users` WHERE username ='$username'");
        
        while($row = $result->fetch_assoc())
        {
	        $user_id=$row['id'];
            break;
        }
    
        //echo $user_id;
        $mysql->query("INSERT INTO `joblist` (`srclink`,`starttime`,`endtime`,`discription`,`stat_id`,`usr_id`,`create_time`) 
                                VALUES ('$srclink','$starttime','$endtime','$discription','$stat_id','$user_id','$createDate')");

        //$mysql->query("INSERT INTO `joblist` (`srclink`),`starttime`,`endtime`,`discription`,`stat_id`,`user_id`) 
        //                            VALUES ('$srclink','$starttime','$endtime','$discription','$stat_id','$user_id')");

    }

    header("location: intropage.php");  