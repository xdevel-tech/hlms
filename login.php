<?php
    session_start();
    require "source/header.php";
    require_once("includes/connection.php"); 
?>

<?php
	
	if(isset($_SESSION["session_username"])){
	// вывод "Session is set"; // в целях проверки
	header("Location: intropage.php");
	}

	if(isset($_POST["login"])){

	if(!empty($_POST['username']) && !empty($_POST['password'])) {
	$username   = htmlspecialchars($_POST['username']);
	$password   = md5(htmlspecialchars($_POST['password']));
	$result      = $mysql->query("SELECT * FROM `users` WHERE username ='$username' AND password='$password'");
	
    $numrows = $result->num_rows;
	
    if($numrows!=0)
    {
        while($row = $result->fetch_assoc())
        {
	        $dbusername=$row['username'];
            $dbpassword=$row['password'];
        }
            if($username == $dbusername && $password == $dbpassword)
            {
	            $_SESSION['session_username']=$username;
                /* Перенаправление браузера */
                header("Location: intropage.php");
	        }
	        } else {
	        //  $message = "Invalid username or password!";
	            echo  "Invalid username or password!";
            }
	        } else {
                        $message = "All fields are required!";
	                }
	        }
?>

<!DOCTYPE html>
	<html lang="en">
	<head>
<meta charset="utf-8">
<title>login</title>
</head> 
<body>
<table align="center"><td>
<div class="container mlogin">
<div id="login">
<h1>LOGIN</h1>
<form action="" id="loginform" method="post"name="loginform">
 <p><label for="user_login">Username<br>
<input class="input" id="username" name="username"size="20" placeholder="Username" type="text" value=""></label></p>
<p><label for="user_pass">Password<br>
 <input class="input" id="password" name="password"size="20" placeholder="Password"
  type="password" value=""></label></p> 
	<p class="submit"><input class="button" name="login" type= "submit" value="Log In"></p>
	</form>
 </div>
  </div></td></table>
</body>
</html>
<?php
    require "source/footer.php";
?>