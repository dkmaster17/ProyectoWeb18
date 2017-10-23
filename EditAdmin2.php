<?php 

$_Serial=isset($_POST['codigo'])?$_POST['codigo']:'';
$_NombreEvento=isset($_POST['nombreevento'])?$_POST['nombreevento']:'';
$_Fecha=isset($_POST['fecha'])?$_POST['fecha']:'';
$_Ubicacion=isset($_POST['ubicacion'])?$_POST['ubicacion']:'';

echo "".$_Serial." ".$_NombreEvento." ".$_Fecha." ".$_Ubicacion;


 ?>