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
   
    <title>Crud Project </title>
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
						<a href="index.php" class="btn btn-info">  Person List</a>
				</div>
				<div class="col-md-7">
					<?php 
						if(isset($_REQUEST['insert'])){
							echo "<b style='color:red'>Data insert Fail</b>";
						}	
						if(isset($_REQUEST['insertSuccess'])){
							echo "<b style='color:green'>Data insert Successfuly</b>";
						}
						
					?>
						<h1 class="">Edit Person</h1>
						<hr />
						<form action="update.php?id=<?php echo $checkRunQuery['id'];?>" method= "POST">
							  <div class="form-group ">
							  
								<label for="name" >Name :</label>
									<input type="text" class="form-control" id="" name ="name" value= "<?php  echo 	$checkRunQuery['Name'];?>" placeholder="Name"/>
								</div>
							 <div class="form-group ">
							  
								<label for="Age" >Age :</label>
									<input type="Number" class="form-control" id="" name ="age" value= "<?php  echo 	$checkRunQuery['Age'];?>" placeholder="Age"/>
								</div>
								<div class="form-group ">
							  
								<label for="Age" >Position :</label>
									<input type="text" class="form-control" id="" name ="position" value= "<?php  echo 	$checkRunQuery['Position'];?>"  placeholder="Position"/>
								</div>
							 <div class="form-group ">
							  
								<label for="Adress" >Adress :</label>
									<input type="text" class="form-control" name ="adress" id="" value= "<?php  echo 	$checkRunQuery['Adress'];?>"  placeholder="Adress"/>
								</div>
							 <div class="form-group ">
							  
								<label for="Mobaile" >Mobaile Number :</label>
									<input type="number" class="form-control" name ="mobile" id=""  value= "<?php  echo 	$checkRunQuery['Mobile'];?>" placeholder="Mobile Number"/>
								</div>
								  <input type="submit" class="btn btn-primary" name="update" value="Update">
						</form>
						
				</div>
				
			</div>
		</div>
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  

		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script src="js/bootstrap.min.js"></script>

  </body>
</html>