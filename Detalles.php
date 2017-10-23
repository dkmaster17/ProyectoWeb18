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
					
				echo "<label>Nombre: </label>".$row["Nombre"]."<br><label>Apellido: </label>".$row["Apellido"]."<br><label>Cedula: </label>".$row["Cedula"]."<br><label>Direccion: </label>".$row["Direccion"]."<br><label>Sexo: </label>".$row["Sexo"]."<br><label>Telefono: </label>".$row["Telefono"]."<br><label>Correo: </label>".$row["Correo"]."<br>";

			}

		} while ( $row = mysql_fetch_array($result));
		}
		$result = mysql_query("SELECT * FROM eventos",$link);

		if ($row = mysql_fetch_array($result)) {
		do {

			if ($row["nickname"]==$_Usuario) {
					
				echo "<label>Serial: </label>".$row["codigo"]."<br><label>Nombre del Evento: </label>".$row["nombreevento"]."<br><label>Fecha: </label>".$row["fecha"]."<br><label>Ubicacion: </label>".$row["ubicacion"]."<br>";

			}

		} while ( $row = mysql_fetch_array($result));
	}
?>

<a href="Administradores.php">Volver</a>

</body>
</html>


