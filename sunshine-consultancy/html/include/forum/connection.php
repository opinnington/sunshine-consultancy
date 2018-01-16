<?php
session_start();
$username = "root";
$password = "";
$server ="localhost";
$db ="forum";
$tbl_users = "users";
$tbl_comments ="comments";
$tbl_answer ="answer";
$connection = mysqli_connect($server, $username, $password, $db);
mysqli_select_db($connection,$db)or die("cannot select DB");

?>
