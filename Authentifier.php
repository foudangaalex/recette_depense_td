



<?php 
$matri=$_POST['matri'];
$mopass=$_POST['mopass'];

    
	require_once("connection.php");
    $ps=$pdo->prepare("select *from etudiant where matricule=? and mot_de_pass=?");
	$params=array($matri,$mopass);
	$ps->execute($params);
	if($user=$ps->fetch()){
		session_start();
		$_SESSION['PROFILE']=$user;
	header("location:Etudiant.php");
	}
   else{
	header("location:http://auth-app.lovestoblog.com/login.php"); 
   }
?>