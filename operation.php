
 <!DOCTYPE html>
<html>
  <head>
       <title></title>
	    <link rel="stylesheet" type="text/css" href="css/myStyle.css">
	    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <?php require_once("entete.php");?>
  <div class=" container  ">
    <div class="row">
	<div class="panel panel-info col-md-3  spacer">
    <div class="panel-heading"><h3>Effectuer une Operation</h3></div>
	 <div class="panel-body">
      <form action="validerOperation.php" method="post">
	    <div class="form-group">
		 <label class="control-label">Montant:</label></br>
		  <input type="number" name="num" class="form-control"/></br>
		</div>
		<div class="form-group">
		 <label class="control-label">description:</label></br>
		  <textarea  name="des" class="form-control" row="8" col="8"></textarea></br>
		</div>
		<div class="form-group">
		 <label class="control-label">origine des font:</label></br>
		  <textarea  name="font" class="form-control" row="8" col="8"></textarea></br>
		</div>
		 <div class="form-group">
		 <label class="control-label">Type d'operation</label></br>
		  <select class="form-control" name="typ" >
		  <?php 
		  require_once("connection.php");
		  $ps=$pdo->prepare("select *from type_operation");
		  $ps->execute();
		  while($re=$ps->fetch())
			  echo"<option value='$re[id_typ_op]'>$re[libelle_typ_op]</option>";
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
      <div class="card col-md-9 spacer">
	   <h3 class=="card-title text-center">Listes des Operation</h3>
	   <div class="card-body">
	    <?php 
		  require_once("connection.php");
		  $ps=$pdo->prepare("select op.description,op.origine_fon ,op.montant,typ_o.libelle_typ_op from operation as op ,type_operation as typ_o where op.id_typ_op=typ_o.id_typ_op");
		  $ps->execute();
		  ?>
	<table class="table table-striped" >
      <thead>
	  <tr>
	  <th>description</th><th>Origine des fonts</th><th>montant</th><th>Type operation</th>
	  </tr>
	  </thead>
	  <tbody>
	  <?php while($et=$ps->fetch()){ ?>
	  <tr>
	  <td><?php echo ($et['description'])?></td>
	      <td><?php echo ($et['origine_fon'])?></td>
	  	  <td><?php echo ($et['montant'])?></td>
		  	  <td><?php echo ($et['libelle_typ_op'])?></td>
	  </tr>
	  <?php } ?>
	  </tbody>
  </table>
	   </div>
	  </div>
	</div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    
</body>
</html>