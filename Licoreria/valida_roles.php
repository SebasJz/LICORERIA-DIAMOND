<?php 

include("conexion.php");

$usuario = $_POST['usuario'];
$clave = $_POST['password'];

$admin = mysqli_query($conexion,"select * from usuarios where usuario='$usuario' && password='$clave' && tipo='admin'");
$usua = mysqli_query($conexion,"select * from usuarios where usuario='$usuario' && password='$clave' && tipo='user'");



if (mysqli_num_rows($admin) > 0) {
		$fila = mysqli_fetch_row($admin);
		$ced = $fila[0];
		$name = $fila[1];
		$tipo = $fila[4];
		session_start();
		$_SESSION['nombre']=$name;
		$_SESSION['id']=$ced;
		$_SESSION['tipo']=$tipo;
        $_SESSION['usuario']=$usuario;

		header('location:bienvenido.html');


}elseif (mysqli_num_rows($usua) > 0) {
	$fila = mysqli_fetch_row($usua);
	$ced = $fila[0];
	$name = $fila[1];
	$tipo = $fila[4];
	session_start();
	$_SESSION['nombre']=$name;
	$_SESSION['id']=$ced;
	$_SESSION['usuario']=$usuario;

	header('location:bienvenido_user.html');

}else{
	echo '<script languaje="javascript">alert("Error de autentificación");window.location.href="index.html"</script>';
}
	

/* 
$consulta = "SELECT * FROM usuarios WHERE usuario = '$usuario' and clave = '$clave'";
$resultado = mysqli_query($conexion,$consulta);

$filas = mysqli_num_rows($resultado);

if ($filas > 0) {
	header("location:usuario.php");
}else{
	echo '<script languaje="javascript">alert("ERROR de autentificación");window.location.href="login.html"</script>';

mysql_free_result($resultado);
mysql_close($conexion);

}
*/

?>