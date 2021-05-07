<?php
    require "source/header.php";
    require_once("includes/connection.php"); 
?>

<?php
	
	if(isset($_POST["register"]))
    {
	    if(!empty($_POST['full_name']) && !empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password'])) 
        {
        
            $full_name  = htmlspecialchars($_POST['full_name']);
            $email      = htmlspecialchars($_POST['email']);
            $username   = htmlspecialchars($_POST['username']);
            $password   = md5(htmlspecialchars($_POST['password']));
            $createDate = date('Y-m-d H:i:s');
            $status = 0;
            
            $result = $mysql->query("SELECT * FROM `users` WHERE email = '$email'");
            //$result = $mysql->query("SELECT * FROM `users` WHERE email ='".$email."'");
                
            $numrows = $result->num_rows;

            if($numrows==0)
            {
                //$mysql->query("INSERT INTO `users` (`name`,`pass`,`email`,`status`,`create_time`) VALUES ('$username','$pwd','$email','$status','$createDate')");
                $sql= "INSERT INTO `users` (`full_name`, `email`, `username`, `password`,`status`, `create_date`)
                                    VALUES('$full_name','$email', '$username', '$password', '$status', '$createDate')";
                $result = $mysql->query($sql);
                
                if ($result) 
                {
                    header("location: index.php");
                } else {
                    echo '<p>registration faild</p>';
                }
               
            }
        }
    }
?>

<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta charset="utf-8"> 
 <title>REGISTRATION</title>
	</head>
<body>
<table align="center"><td>
<div class="container mregister">
    <div id="login">
    <h1>REGISTRATION</h1>
    <form action="register.php" id="registerform" method="post"name="registerform">
        <input class="input" id="full_name" name="full_name"size="32"  type="text" value="" placeholder="full name"></label></p>
        <input class="input" id="email" name="email" size="32"type="email" value="" placeholder="e-mail"></label></p>
        <input class="input" id="username" name="username"size="20" type="text" value="" placeholder="user name"></label></p>
        <input class="input" id="password" name="password"size="32"   type="password" value="" placeholder="password"></label></p>
        <p class="submit"> <input class="button" id="register" name= "register" type="submit" value="Register"> </p>
    </form>
    </div>
</div></td>
</table>
</body>
</html>
<?php
    require "source/footer.php";
?>