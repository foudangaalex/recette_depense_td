

<?php 
 require_once("connection.php");
 $requete="SELECT etu.id_et,etu.nom,etu.prenom,etu.sexe,etu.date_naiss,etu.tel,etu.nationnalite,fac.libelle_fac FROM etudiant as etu,faculte as fac where etu.id_fac=fac.id_fac ";
$ps=$pdo->prepare($requete);
$ps->execute();  
 ?>
 <!DOCTYPE html>
<html>
  <head>
       <title></title>
	    <link rel="stylesheet" type="text/css" href="css/myStyle.css">
	    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <?php require_once("entete.php");?>
  <div class=" col-md-12 col-sx-12 spacer ">
  
   <div class="panel panel-info spacer">
    <div class="panel-heading">Listes des etudiants</div>
	 <div class="panel-body">
	      <table class="table table-striped" >
      <thead>
	  <tr>
	  <th>NOM</th><th>PRENOM</th><th>SEXE</th><th>DATE DE NAISSANCE</th><th>TELEPHONE</th><th>NATIONNALITE</th><th>FACULTE</th>
	  </tr>
	  </thead>
	  <tbody>
	  <?php while($et=$ps->fetch()){ ?>
	  <tr>
	  <td><?php echo ($et['nom'])?></td>
	  	  <td><?php echo ($et['prenom'])?></td>
		  	  <td><?php echo ($et['sexe'])?></td>
			  	  <td><?php echo ($et['date_naiss'])?></td>
				   <td><?php echo ($et['tel'])?></td>
				    <td><?php echo ($et['nationnalite'])?></td>
					<td><?php echo ($et['libelle_fac'])?></td>
	  </tr>
	  <?php } ?>
	  </tbody>
  </table>
	 </div>
   </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    
</body>
</html>