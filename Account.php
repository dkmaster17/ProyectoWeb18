<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title></title>
</head>
<body>

<?php 
	 	$base1=new PDO('mysql:host=localhost; dbname=usuarios','root','');
	 	$base1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	 	$sql1="SELECT * FROM admin WHERE Nickname= :login AND password= :password";

	 	$resultado1=$base1->prepare($sql1);

	 	$login1=htmlentities(addslashes($_POST["login"]));
	 	$password1=htmlentities(addslashes($_POST["password"]));

	 	$resultado1->bindValue(":login", $login1);
	 	$resultado1->bindValue(":password", $password1);


	 	$resultado1->execute();
	 	

	 	$numero_registro1=$resultado1->rowCount();

	 	 if ($numero_registro1!=0) {
	 		
	 		session_start();
	 		$_SESSION["usuario"]=$_POST["login"];

	 		header("location: administradores.php");

	 	}else{

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
	 		
	 		session_start();
	 		$_SESSION["usuario"]=$_POST["login"];

	 		header("location: Boletos.php");

	 	}else{

	 		header("location:Login.php");

	 	}

	 	}
			
		
	 	

	

 ?>

</body>
</html>