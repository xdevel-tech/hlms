<?php
   
    $btnType = $_POST['btn'];

    if ($btnType == 'Register') {
        singUp();
    } else {
        singIn();
    }

    function singIn()
    {
        $username = $_POST['user'];
        $pwd = md5($_POST['pass']);
        // check user and pass in db 
        $mysql = new mysqli('localhost','vscode','a113043966B$','hlmsdb','3306');
        $mysql->query("SET NAMES 'utf8'");
        $result = $mysql->query("SELECT * FROM `users` WHERE pass = '$pwd' AND  name = '$username'");
        
        if ($result->num_rows == 0) {
            echo 'login faild';
        } else {
            echo 'success';
            //enter to database
        }
        
        $mysql->close();

       // echo('sing in');

    }

    function singUp()
    {
        $mysql = new mysqli('localhost','vscode','a113043966B$','hlmsdb','3306');
        $mysql->query("SET NAMES 'utf8'");
            
        $username = $_POST['user'];
        $pwd = md5($_POST['pass']);
        $email = $_POST['email'];
        $createDate = date('Y-m-d H:i:s');
        $status = 0;

        $result = $mysql->query("SELECT * FROM `users` WHERE email = '$email' AND  name = '$username'");
        
        if ($result->num_rows == 0) {
            $mysql->query("INSERT INTO `users` (`name`,`pass`,`email`,`status`,`create_time`) VALUES ('$username','$pwd','$email','$status','$createDate')");
        } else {
            echo 'user already exist';
        }
        
        $mysql->close();

    }