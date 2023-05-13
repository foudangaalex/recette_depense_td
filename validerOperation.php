<?php 
$des=$_POST['des'];
$fon=$_POST['font'];
$num=$_POST['num'];
$typ=$_POST['typ'];
require_once("connection.php");
    $ps=$pdo->prepare("insert into operation(description,origine_fon,montant,id_typ_op) value(?,?,?,?)");
	$params=array($des,$fon,$num,$typ);
	$ps->execute($params);
header("location:http://auth-app.lovestoblog.com/operation.php");

?>