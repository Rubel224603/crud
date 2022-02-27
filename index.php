<?php
	$host= "localhost";
	$dbUser ="root";
	$dbName ="crud";
	$dbPass ="";
	
	$connect = mysqli_connect("$host","$dbUser","$dbPass","$dbName");
	
	if(!$connect == true ){
		echo "<h1>Error Database Connection Established </h1>";
	}

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
		<div class="col-md-2">
				<a href="insert.php" class="btn btn-info">Add New Person</a>
		</div>
		<div class="col-md-10">
			<table class="table">
				<thead>
					<th>Db Id</th>
					<th>Name</th>
					<th>Age</th>
					<th>Position</th>
					<th>Adress</th>
					<th>Mobile Number</th>
					<th >Action</th>
				</thead>
				<tbody>
				<h2 class="bg-primary text-center">Person list</h2>
				
				<?php 
					$selectQuery = "SELECT *FROM data ";
					
					$selectRunQuery = mysqli_query($connect, $selectQuery);
					
					while($row= mysqli_fetch_array(	$selectRunQuery)){ ?>
						

					<tr>
						<td><?php echo  $row['id'] ;?></td>
						<td><?php echo $row['Name'] ;?></td>
						<td><?php echo $row['Age'] ;?></td>
						<td><?php echo $row['Position'] ;?></td>
						<td><?php echo $row['Adress'] ;?></td>
						<td><?php echo $row['Mobile'] ;?></td>
						
						<td>
							<a href="insert.php" class="btn btn-primary">Add</a>
							<a href="show.php?id=<?php echo  $row['id'] ;?>" class="btn btn-primary">View</a>
							<a href="edit.php?id=<?php echo $row['id'];?>" class="btn btn-warning">Edit</a>
							<a href="delete.php?id=<?php echo  $row['id'] ;?>" class="btn btn-danger" onclick="return confirm('Are you sure?Want To Delete ')">Delete</a>
						</td>
					</tr>
				<?php	
					
					}
					
				?>
				</tbody>
			</table>
		</div>
		
	</div>
  </div>
  
  
  
  
  
  
  
  
  
  
  

    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>