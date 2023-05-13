<?php
$id_et=$_GET['id_et'];
require_once("connection.php");
 $ps=$pdo->prepare("delete from etudiant where id_et=?)");
 $params=array($id_et);
 $ps->execute($params);
 header("location:http://auth-app.lovestoblog.com/Etudiant.php");
?>