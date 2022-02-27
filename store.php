
<?php
	$host= "localhost";
	$dbUser ="root";
	$dbName ="crud";
	$dbPass ="";

	$connect = mysqli_connect("$host","$dbUser","$dbPass","$dbName");
	if(!$connect == true ){
		echo "<h1>Error Database Connection Established </h1>";
	}

	
	if(isset($_POST['submit'])){
		
	
		  $name = $_POST['name'];
		 $age = $_POST['age'];
		 $position = $_POST['position'];
		
		$adress = $_POST['adress'];
		$mobile = $_POST['mobile'];
    }
	$insertQuery = "INSERT INTO data   VALUES(NULL,'$name', '$age','$position','$adress','$mobile ')";
	
	$runInsertQuery = mysqli_query($connect,$insertQuery);
	
	if($runInsertQuery== true ){
		header("location:index.php?insertDone=success");
	}else{
		header("location:insert.php?insert= fail");
	}
?>