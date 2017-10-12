<?php
session_start();
include_one('codeXD.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title> SistemaDeEventos </title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Style.css">
</head>
 <header> 

 Dk`s Party Service 

 <img src="userlogo.png"  class="LogoUser" alt="login">
 
 </header>

<body>

 
  <div class="fondo">
  
  	<form action="codeXD.php" method="POST">
  	
  	<div class="Formulario">
	<fieldset>
	<legend>Resgitro</legend>
  	<label>Nombre</label><input type="text" name="nombre" requirem="" maxlength="30" placeholder="NameHere"></br>
  	<label>Apellido</label><input type="text" name="apellido" requirem="" maxlength="30" placeholder="LastNameHere"></br>
  	<label>Cedula</label><input type="number" name="cedula" requirem="" maxlength="9" placeholder="144512156"></br>
  	<label>Direccion</label><input type="text" name="direccion" requirem="" maxlength="50" placeholder="Calle X- X -X"></br>
  	<label>M</label><input type="radio" name="sexo" requirem="" value="Masculino">
  	<label>F</label><input type="radio" name="sexo" requirem="" value="Femenino"> </br>
  	<label>Telf</label><input type="number" name="telefono" requirem="" maxlength="14" placeholder="08002268800"> </br>
  	<label>Correo</label><input type="email" name="correo" requirem="" maxlength="30" placeholder="ejemplo@x.x"></br>
  	<label>Nickname</label><input type="text" name="nickname" requirem="" maxlength="30" placeholder="Skatox"></br>
  	<label>Contraseña</label><input type="password" name="contraseña" requirem="" maxlength="16" placeholder="*************"></br>
  	<label>Verificar Pass</label><input type="password" name="contraseña2" requirem=""maxlength="16" placeholder="*************"></br>
  	<div class="SubContainer">
  	<input type="submit" name="EnviarRegistro" value="Submit">
  </div>

	
	</fieldset>
	</div>
  	

	</form>
	
	</div>

	<footer>Copyrigth @2017</footer>
  

</body>

</html>

