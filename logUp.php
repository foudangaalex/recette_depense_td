<?php 

session_start();
session_destroy();
header("location:http://auth-app.lovestoblog.com/login.php");
?>