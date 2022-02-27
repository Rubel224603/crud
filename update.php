

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
	
	if(isset($_POST['update'])){
		$name  = $_POST['name'];
		$age  =  $_POST['age'];
		$position = $_POST['position'];
		$adress = $_POST['adress'];
		$mobile = $_POST['mobile'];
		
	
	
	
		
		$upQuery = "UPDATE  data SET  Name='$name', Age='$age', Position='$position',Adress='$adress', Mobile='$mobile' WHERE id=$passId";
		
		$runUpQuery = mysqli_query($connect,$upQuery);
		
		
		if(	$runUpQuery== true){
			header("location:index.php");
		}else{
			echo"UPdate Faile";
		}
	
	}

?>




