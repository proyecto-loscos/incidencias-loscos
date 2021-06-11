<?php

$conexion = mysqli_connect('192.168.100.178','admin','loscos.2021', 'loscos') or die ('No se pudo establecer conexión con la base de datos.');

$consulta= "SELECT nombreUsuario, clave FROM tecnicos WHERE nombreUsuario='". $_POST["usuario"]."' AND clave=SHA('".$_POST["contrasena"] ."');";

$query = mysqli_query($conexion, $consulta);

$array = mysqli_fetch_array($query);

if ($array){
	session_start();
	$_SESSION['autentificado'] = "SI";
	header ("Location: incidencias/index.php");
}else {
	header("Location: index.php?error=si");
}
?>
