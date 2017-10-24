<?php 
	
$_Nickname=isset($_POST['usuario'])?$_POST['usuario']:'';


						$link = mysql_connect("localhost","root");
						mysql_select_db("usuarios",$link);

						$sql = "DELETE FROM `usuarios`.`informacion` WHERE `informacion`.`Nickname` = '$_Nickname'";
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