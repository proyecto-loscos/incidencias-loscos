<?php
$conexion = mysqli_connect('192.168.100.178','admin','loscos.2021', 'loscos') or die ('No se pudo establecer conexión con la base de datos.');

$consulta= "insert into incidencias(nombreUsuario, equipo, tipo , descripcion, tecnicoincidencia) values ('".$_POST['usuario']."', '".$_POST['equipo']."', '".$_POST['tipo']."', '".$_POST['descripcion']."', '1'); ";

$query = mysqli_query($conexion, $consulta);

if ($query){
	header ("Location:ready.php");
}else {
	header("Location:index.php?error=si");
}
?>
