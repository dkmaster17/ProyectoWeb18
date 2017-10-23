<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 

	session_start();

	$link = mysql_connect("localhost","root");
	mysql_select_db("usuarios",$link);

	$result = mysql_query("SELECT Nombre, Apellido, Cedula, Nickname FROM informacion",$link);
	
	
	if ($row = mysql_fetch_array($result)) {

		echo "<table border='1'> \n";
		
		do {


			echo "<tr><td>".$row["Nombre"]."</td><td>".$row["Apellido"]."</td><td>".$row["Cedula"]."</td>";

			$result2=mysql_query("SELECT nombreevento, ubicacion, nickname FROM eventos",$link);
			
			if ($row2=mysql_fetch_array($result2)) {

				do {
					if ($row2["nickname"]==$row["Nickname"]) {


						echo "<td>".$row2["nombreevento"]."</td><td>".$row2["ubicacion"]."</td>";
					}
					

				} while ($row2=mysql_fetch_array($result2));
			}
			echo "<td><form action= 'Detalles.php' method='post'><input type='hidden' name='usuario' value='".$row["Nickname"]."'><input type='submit' value='Detalles'></form></td><td><form action= 'Editar.php' method='post'><input type='hidden' name='usuario' value='".$row["Nickname"]."'><input type='submit' value='Editar'></form></td><td><form action= 'Eliminar.php' method='post'><input type='hidden' name='usuario' value='".$row["Nickname"]."'><input type='submit' value='Eliminar'></form></td></tr>\n";

		} while ($row = mysql_fetch_array($result));

		echo "</table> \n";
		
	}else{

		echo "No se encontraron registros";
	}



 ?>

<a href="Cierre.php"> Cerrar Sesion</a>
</body>
</html>