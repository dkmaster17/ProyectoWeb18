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


session_start();



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
  $sql_store = "INSERT into informacion(`Nombre`,`Apellido`,`Cedula`,`Direccion`,`Sexo`,`Telefono`,`Correo`,`Nickname`,`password`)VALUES('$_Nombre','$_Apellido','$_Cedula','$_Direccion','$_Sexo','$_Telefono','$_Correo','$_Nickname','$_Contraseña')";
  

  $sql=mysqli_query($_DataBase,$sql_store);
}
 header("Location: Login.php");
?>

