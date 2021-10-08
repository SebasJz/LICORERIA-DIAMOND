<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style3.css">
	<title></title>
	<script type="text/javascript">
		 function comprobarClave(){
		 	clave1 = document.f1.clave1.value
		 	clave2 = document.f1.clave2.value

		 	if (clave1 == clave2)
		 		alert(" La contraseña se cambio con exito")

		 	else
		 		alert("Las dos claves son distintas...vuelva a intentarlo")
		 }      exit(); 

	</script>
</head>
<body>
<div>
<form method="post" action="cambiarpass.php" name="f1">
	<h1>Cambiar Contraseña:</h1> <br>
    <input type="password" class="num1" name="clave1" placeholder="Ingrese la nueva contraseña"><br><br>
    <input type="password" class="num2" name="clave2" placeholder="Repita la nueva contraseña"><br><br>
    <input type="submit" class="boton" value="Cambiar" onClick="comprobarClave()">

</form>
</div>
</body>
</html>