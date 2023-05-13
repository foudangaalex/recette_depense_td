
<!DOCTYPE HTML>
<html>
 <head>
  <title>
  </title>
  <link rel="stylesheet" type="text/css" href="css/myStyle.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

 </head>
 <body>
    
    <?php require_once("entete.php");?>
	<div class=" container col-md-6 spacer">
	<div class="panel-info">
	 <div class="panel-heading"><h3>SAISIE DES ETUDIANTS</h3></div>
	 <div class="panel-body">
	   <form action="saveEtudiant.php" method="post">
	    <div class="form-group">
		 <label class="control-label"> NOM</label>
		  <input type="text" name="nom" class="form-control"/>
		</div>
		<div class="form-group">
		 <label class="control-label"> PRENOM</label></br>
		  <input type="text" name="prenom" class="form-control"/>
		</div>
		<div class="form-group">
		 <label class="control-label"> SEXE</label>
		  <select class="form-control" name="sexe" >
		  <option value="m">M</option>
		  <option value="f">F</option>
		  </select>
		</div>
		<div class="form-group">
		 <label class="control-label"> DATE DE NAISSANCE</label>
		  <input type="date" name="date_naiss" class="form-control" />
		</div>
		<div class="form-group">
		 <label class="control-label"> TELEPHONE</label>
		  <input type="tel" name="phone" class="form-control"/>
		</div>
		<div class="form-group">
		 <label class="control-label"> NATIONNALITE</label>
		  <input type="text" name="nationnalite" class="form-control"/>
		</div> 
		  <div class="form-group">
		 <label class="control-label"> MATRICULE</label>
		  <input type="text" name="matricule" class="form-control" maxlength="9"/>
		</div> 
		 <div class="form-group">
		 <label class="control-label">MOT DE PASS </label>
		  <input type="password" name="pass" class="form-control" maxlength="8">
		</div>
		 <div class="form-group">
		 <label class="control-label"> FACULTE</label>
		  <select class="form-control" name="fac" >
		  <?php 
		  require_once("connection.php");
		  $ps=$pdo->prepare("select *from faculte");
		  $ps->execute();
		  while($re=$ps->fetch())
			  echo"<option value='$re[id_fac]'>$re[libelle_fac]</option>";
		  ?>
		  </select>
		</div>
		<div>
		 <button type="submit" class="bnt btn-primary">enregistrer</button>
		  <button type="reset" class="bnt btn-primary">annuler</button>
		</div>
	   </form>
	 </div>
	 
	</div>
	 </div>
	
     <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

 </body>
</html>