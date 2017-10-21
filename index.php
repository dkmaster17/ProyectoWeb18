
<!DOCTYPE html>
<html>
<head>
	<title> SistemaDeEventos </title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Style.css">
</head>
 

<body>

 <header> 

 Dk`s Party Service 

 <img src="userlogo.png"  class="LogoUser" alt="login" href="Login.php">
 
 </header>
   <div class="fondo">
  
  	<form action="CodeXD.php" method="POST">
  	
  	<div class="Formulario">
	<fieldset>
		
	<legend>Resgitro</legend>
  	<table>
  	<tr>
  	<td><label>Nombre</label></td> <td><input type="text" name="nombre" requirem="" maxlength="30" placeholder="NameHere" value="Dk"></td>
  	</tr>
  	<tr>
  	<td><label>Apellido</label></td><td><input type="text" name="apellido" requirem="" maxlength="30" placeholder="LastNameHere" value="master"></td>
  	</tr>

  	<tr>
  	<td><label>Cedula</label></td><td><input type="number" name="cedula" requirem="" maxlength="9" placeholder="144512156" value="123124125"></td>
  	</tr>
  	<tr>	
  	<td><label>Direccion</label></td><td><input type="text" name="direccion" requirem="" maxlength="50" placeholder="Calle X- X -X" value="calle4 vereda 4"></td>
	</tr>

  	<tr>
  	<td>
  	<label>M</label><input type="radio" name="sexo" requirem="" checked="" value="Masculino">
  	<label>F</label><input type="radio" name="sexo" requirem="" value="Femenino">
  	</td>
  	</tr>
  	<tr>
  	<td><label>Telf</label></td><td><input type="number" name="telefono" requirem="" maxlength="14" placeholder="08002268800" value="124124124"></td>
  	</tr>
  	<tr>
  	<td><label>Correo</label></td><td><input type="email" name="correo" requirem="" maxlength="30" placeholder="ejemplo@x.x" value="dkmaster17@hotmail.com"></td>
  	</tr>
  	<tr>
  	<td><label>Nickname</label></td><td><input type="text" name="nickname" requirem="" maxlength="30" placeholder="Skatox" value="Dkmaster"></td>
  	</tr>
  	<tr>
  	<td><label>Contraseña</label></td><td><input type="password" name="contraseña" requirem="" maxlength="16" placeholder="*************" value="171195244"></td>
  	</tr>
  	<tr>
  	<td><label>Verificar Pass</label></td><td><input type="password" name="contraseña2" requirem=""maxlength="16" placeholder="*************" value="171195244"></td>
  	</tr>
  	</table>
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