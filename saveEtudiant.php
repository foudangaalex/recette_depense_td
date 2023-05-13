



<?php 
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$sexe=$_POST['sexe'];
$date_naiss=$_POST['date_naiss'];
$tel=$_POST['phone'];
$nationnalite=$_POST['nationnalite'];
$matricule=$_POST['matricule'];
$mot_pass=$_POST['pass'];
$fac=$_POST['fac'];
    
	require_once("connection.php");
    $ps=$pdo->prepare("insert into etudiant(nom,prenom,sexe,date_naiss,tel,nationnalite,matricule,mot_de_pass,id_fac) value(?,?,?,?,?,?,?,?,?)");
	$params=array($nom,$prenom,$sexe,$date_naiss,$tel,$nationnalite,$matricule,$mot_pass,$fac);
	$ps->execute($params);
	header("location:http://auth-app.lovestoblog.com/Etudiant.php");

?>