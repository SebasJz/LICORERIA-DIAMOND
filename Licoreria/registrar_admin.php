<?php 	

include "conexion.php";

$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$clave = $_POST['password'];
$tipo = $_POST['tipo'];

$insertar ="INSERT INTO usuarios(nombre,usuario,password,tipo) VALUES('$nombre','$usuario','$clave','$tipo')";

$verificar_usuario = mysqli_query($conexion,"SELECT * FROM usuarios WHERE usuario = '$usuario'");

if (mysqli_num_rows($verificar_usuario) > 0) {
	echo "El usuario ya existe";
	exit();
}

$resultado = mysqli_query($conexion,$insertar);

if ($resultado) {
	echo '<script>
	alert("Se registró correctamente");
	header("location:index.html");
	</script>';
}else{
	echo "Hay problemas en la inserción de registro";
}

mysqli_close($conexion);




 ?>

 <a href="index.html">Ingresar al Login</a>