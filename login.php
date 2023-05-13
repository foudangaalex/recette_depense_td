<!DOCTYPE HTML>
<html>
 <head>
  <title>
  </title>
  <link rel="stylesheet" type="text/css" href="css/myStyle.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

 </head>
 <body>
	<div class=" container col-md-6 spacer">
	<div class="panel-info">
	 <div class="panel-heading"><h3>AUTHENTIFICATION</h3></div>
	 <div class="panel-body">
	   <form action="Authentifier.php" method="post">
	    <div class="form-group">
		 <label class="control-label"> matricule</label>
		  <input type="text" name="matri" class="form-control"/>
		</div>
		<div class="form-group">
		 <label class="control-label"> mot de pass</label></br>
		  <input type="password" name="mopass" class="form-control"/>
		</div>
		</div>
		<div>
		 <button type="submit" class="bnt btn-primary">se connecter</button>
		</div>
	   </form>
	 </div>
	 
	</div>
	 </div>
	
     <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

 </body>
</html>