<?php 
$_Serial=isset($_POST['Serial'])?$_POST['Serial']:'';
$_NombreEvento=isset($_POST['NombreEvento'])?$_POST['NombreEvento']:'';
$_Fecha=isset($_POST['Fecha'])?$_POST['Fecha']:'';
$_Ubicacion=isset($_POST['Ubicacion'])?$_POST['Ubicacion']:'';

$_DataBase= mysqli_connect("localhost" ,"root","","usuarios");

session_start();
$_Usuario=$_SESSION['usuario'];

if
(isset($_POST['Serial'])  &&
isset($_POST['NombreEvento']) && 
isset($_POST['Fecha'])   &&
isset($_POST['Ubicacion']))
{
	

	$base=new PDO('mysql:host=localhost; dbname=usuarios','root','');
	 	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	 	$sql="SELECT * FROM eventos WHERE codigo= :codigo";
	 	$resultado=$base->prepare($sql);

	 	$login=htmlentities(addslashes($_POST["Serial"]));

	 	$resultado->bindValue(":codigo", $login);


	 	$resultado->execute();
	 	

	 	$numero_registro=$resultado->rowCount();

	 	if ($numero_registro!=0) {
	 		
	 		header('Location: Boletos.php');

	 		
	 	}else{



 			 $sql_store = "INSERT INTO eventos(`codigo`,`nombreevento`,`fecha`,`ubicacion`,`nickname`)VALUES('$_Serial','$_NombreEvento','$_Fecha','$_Ubicacion','$_Usuario')";
  
 			$sql=mysqli_query($_DataBase,$sql_store);
  			header("Location: Boletos.php");
  		}
  }


 ?>