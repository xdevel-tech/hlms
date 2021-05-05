<?php
   
    $btnType = $_POST['btn'];

    if ($btnType == 'Sing up') {
        singUp();
    } else {
        singIn();
    }

    function singIn()
    {
        $username = $_POST['user'];
        $pwd = $_POST['pass'];
        // check user and pass in db 
        $mysql = new mysqli('localhost','vscode','a113043966B$','hlmsdb','3306');
        $mysql->query("SET NAMES 'utf8'");
        $mysql->close();

        echo('sing in');

    }

    function singUp()
    {
        $mysql = new mysqli('localhost','vscode','a113043966B$','hlmsdb','3306');
        $mysql->query("SET NAMES 'utf8'");
        $mysql->close();

    }