<?php 

$_Serial=isset($_POST['codigo'])?$_POST['codigo']:'';
$_NombreEvento=isset($_POST['nombreevento'])?$_POST['nombreevento']:'';
$_Fecha=isset($_POST['fecha'])?$_POST['fecha']:'';
$_Ubicacion=isset($_POST['ubicacion'])?$_POST['ubicacion']:'';

$link = mysql_connect("localhost","root");
	mysql_select_db("usuarios",$link);

	$result = mysql_query("SELECT * FROM eventos",$link);
	if ($row = mysql_fetch_array($result)) {


		do {
			
			if ($row["codigo"]==$_Serial) {
				
				$sql = "UPDATE eventos SET codigo='$_Serial' , nombreevento='$_NombreEvento', fecha='$_Fecha', ubicacion='$_Ubicacion' ";
				$result= mysql_query($sql);
			}

		} while ($row = mysql_fetch_array($result));

	}
	

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



 