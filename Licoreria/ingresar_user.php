<?php 	

include "conexion.php";

$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$clave = $_POST['password'];
$user = 'user';

$insertar ="INSERT INTO usuarios(nombre,usuario,password,tipo) VALUES('$nombre','$usuario','$clave','$user')";

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
	echo "Hay problemas en la inserción de registrox";
}

mysqli_close($conexion);




 ?>