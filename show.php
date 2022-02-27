<?php
	$host= "localhost";
	$dbUser ="root";
	$dbName ="crud";
	$dbPass ="";
	
	$connect = mysqli_connect("$host","$dbUser","$dbPass","$dbName");
	
	if(!$connect == true ){
		echo "<h1>Error Database Connection Established </h1>";
	}
	$passId =$_GET['id'];
	
	$showQuery = "SELECT * FROM data WHERE id=$passId";
	
	$showRunQuery = mysqli_query($connect,$showQuery);
	$checkRunQuery = mysqli_fetch_array($showRunQuery);
	
	
	

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Crud Project</title>
	<link rel="icon" type="image/x-icon" href="img/rubel.jpg">
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/bootstrap.css" />
    
  </head>
  <body>
	<br />
	<br />
	<br />
  <div class="container">
	<div class="row">
		<div class="col-md-3">
				<a href="index.php" class="btn btn-info">Person list</a>
		</div>
		<div class="col-md-9">
			<h1>Person Information </h1>
			<hr />
			<table class="table">
				<tr>
					<th width="100" class="text-right">Id  :</th>
					<td><?php echo $checkRunQuery['id']; ?></td>
				</tr>
				<tr>
					<th width="100" class="text-right">Name :</th>
					<td><?php echo $checkRunQuery['Name']; ?> </td>
				</tr>
				<tr>
					<th width="100" class="text-right">Age :</th>
					<td><?php echo $checkRunQuery['Age']; ?></td>
				</tr>
				<tr>
					<th width="100" class="text-right">Position :</th>
					<td><?php echo $checkRunQuery['Position']; ?></td>
				</tr>
				<tr>
					<th width="100" class="text-right">Phon  :</th>
					<td><?php echo $checkRunQuery['Mobile']; ?></td>
				</tr>	
				<tr>
					<th width="100" class="text-right">Adress  :</th>
					<td><?php echo $checkRunQuery['Adress']; ?></td>
				</tr>	
				
				
					
					

			
		</div>
		
	</div>
  </div>
  
  
  
  
  
  
  
  
  
  
  

    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>