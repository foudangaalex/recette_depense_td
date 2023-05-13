<?php
session_start();
if(!(isset($_SESSION['PROFILE']))){
		header("location:http://auth-app.lovestoblog.com/login.php"); 
}
?>