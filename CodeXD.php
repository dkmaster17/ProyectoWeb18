<?php

$_Nombre=isset($_POST['nombre'])?$_POST['nombre']:'';
$_Apellido=isset($_POST['apellido'])?$_POST['apellido']:'';
$_Cedula=isset($_POST['cedula'])?$_POST['cedula']:'';
$_Direccion=isset($_POST['direccion'])?$_POST['direccion']:'';
$_Sexo=isset($_POST['sexo'])?$_POST['sexo']:'';
$_Telefono=isset($_POST['telefono'])?$_POST['telefono']:'';
$_Correo=isset($_POST['correo'])?$_POST['correo']:'';
$_Nickname=isset($_POST['nickname'])?$_POST['nickname']:'';
$_Contraseña=isset($_POST['contraseña'])?$_POST['contraseña']:'';

$_DataBase= mysqli_connect("localhost" ,"root","","usuarios");






if
(isset($_POST['nombre'])  &&
isset($_POST['apellido']) && 
isset($_POST['cedula'])   &&
isset($_POST['direccion'])&&
isset($_POST['sexo'])     &&
isset($_POST['telefono']) &&
isset($_POST['correo'])   &&
isset($_POST['nickname']) &&
isset($_POST['contraseña']))
{
	

	$base=new PDO('mysql:host=localhost; dbname=usuarios','root','');
	 	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	 	$sql="SELECT * FROM informacion WHERE Nickname= :nickname";
	 	$resultado=$base->prepare($sql);

	 	$login=htmlentities(addslashes($_POST["nickname"]));

	 	$resultado->bindValue(":nickname", $login);


	 	$resultado->execute();
	 	

	 	$numero_registro=$resultado->rowCount();

	 	if ($numero_registro!=0) {
	 		header("Location: index.php");
	 	}else{



 			 $sql_store = "INSERT INTO informacion(`Nombre`,`Apellido`,`Cedula`,`Direccion`,`Sexo`,`Telefono`,`Correo`,`Nickname`,`password`)VALUES('$_Nombre','$_Apellido','$_Cedula','$_Direccion','$_Sexo','$_Telefono','$_Correo','$_Nickname','$_Contraseña')";
  
 			$sql=mysqli_query($_DataBase,$sql_store);
  			header("Location: Login.php");
  		}
  }

  

 
?>

