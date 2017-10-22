<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title></title>
</head>
<body>

<?php 
	 
	

	 	$base=new PDO('mysql:host=localhost; dbname=usuarios','root','');
	 	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	 	$sql="SELECT * FROM informacion WHERE Nickname= :login AND password= :password";
	 	$resultado=$base->prepare($sql);

	 	$login=htmlentities(addslashes($_POST["login"]));
	 	$password=htmlentities(addslashes($_POST["password"]));

	 	$resultado->bindValue(":login", $login);
	 	$resultado->bindValue(":password", $password);


	 	$resultado->execute();
	 	

	 	$numero_registro=$resultado->rowCount();



	 	if ($numero_registro!=0) {
	 		
	 		echo "<h2>Donete<h2>";

	 	}else{

	 		header("location:Login.php");

	 	}


	

 ?>

</body>
</html>