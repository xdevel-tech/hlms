<?php
	require("constants.php");

    $mysql = new mysqli(DB_SERVER,DB_USER, DB_PASS,DB_NAME);
    $mysql->query("SET NAMES 'utf8'");

	?>