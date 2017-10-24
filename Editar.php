<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 

$_Usuario=isset($_POST['usuario'])?$_POST['usuario']:'';

	$link = mysql_connect("localhost","root");
	mysql_select_db("usuarios",$link);

	$result = mysql_query("SELECT * FROM informacion",$link);

	if ($row = mysql_fetch_array($result)) {
		do {

			if ($row["Nickname"]==$_Usuario) {
					
				echo "<form action='EditAdmin.php' method='post'><label>Nombre: </label><input type='text' name='nombre' value='".$row["Nombre"]."'><br><label>Apellido: </label><input type='text' name='apellido' value='".$row["Apellido"]."'><br><label>Nombre: </label><input type='number' name='cedula' value='".$row["Cedula"]."'><br><label>Direccion: </label><input type='text' name='direccion' value='".$row["Direccion"]."'><br><label>M</label><input type='radio' name='sexo' checked='' value='Masculino'>
  					<label>F</label><input type='radio'name='sexo' value='Femenino'><br><label>Telefono: </label><input type='number' name='telefono' value='".$row["Telefono"]."'><br><label>Correo: </label><input type='text' name='correo' value='".$row["Correo"]."'><br><input type='hidden' name='nickname' value='".$row["Nickname"]."'><input type='submit' value='Confirmar'></form>";

			}

		} while ( $row = mysql_fetch_array($result));
		}
		
?>
<a href="Administradores.php">Volver</a>
</body>
</html>