<?php 
	
$_Nombre=isset($_POST['nombre'])?$_POST['nombre']:'';
$_Apellido=isset($_POST['apellido'])?$_POST['apellido']:'';
$_Cedula=isset($_POST['cedula'])?$_POST['cedula']:'';
$_Direccion=isset($_POST['direccion'])?$_POST['direccion']:'';
$_Sexo=isset($_POST['sexo'])?$_POST['sexo']:'';
$_Telefono=isset($_POST['telefono'])?$_POST['telefono']:'';
$_Correo=isset($_POST['correo'])?$_POST['correo']:'';
$_Nickname=isset($_POST['nickname'])?$_POST['nickname']:'';


						$link = mysql_connect("localhost","root");
						mysql_select_db("usuarios",$link);

						$sql = "UPDATE `usuarios`.`informacion` SET `Nombre` = '$_Nombre',
							`Apellido` = '$_Apellido',
							`Cedula` = '$_Cedula',
							`Direccion` = '$_Direccion',
							`Telefono` = '$_Telefono',
							`Correo` = '$_Correo' WHERE `informacion`.`Nickname` = '$_Nickname'";
						$result= mysql_query($sql);
					

	echo "cambio realizado";


	

	



 ?>
 <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="Administradores.php">Volver</a>
</body>
</html>