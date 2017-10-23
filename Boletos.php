<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

<?php 

	session_start();

	if (!isset($_SESSION["usuario"])) {

		header("location: Login.php");
		
	}else{



	}

 ?>
	<div>
		<form action="Registro.php" method="post">
		<table>
			<td>
				<tr>Serial: <input type="number" name="Serial" required=""></tr>
			<tr> Nombre del Evento<input type="text" name="NombreEvento" required=""></tr>
			<tr>Fecha del Evento<input type="date" name="Fecha" required=""></tr>
			<tr>Ubicacion: Altos<input type="radio" name="Ubicacion" requirem="" checked="" value="Altos"></tr>
			<tr> Medios<input type="radio" name="Ubicacion" requirem="" checked="" value="Medios"></tr>
			<tr> VIP<input type="radio" name="Ubicacion" requirem="" checked="" value="VIP"></tr>
			<tr >Platino<input type="radio" name="Ubicacion" requirem="" checked="" value="Platino"></tr>
			<tr><input type="submit" name="Enviar" value="Comprar"></tr>
			</td>
		</table>
		</form>
		<a href="Cierre.php"> Cerrar Sesion</a>
	</div>


</body>
</html>