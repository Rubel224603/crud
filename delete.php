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
	
	$deleteQuery = "DELETE FROM data WHERE  id='$passId '";
	 
	 $rundelteQuery =mysqli_query($connect,$deleteQuery);
	 if( $rundelteQuery== true){
		 header("location:index.php?delete=success");
	 }
	 
?>