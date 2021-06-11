<?php 
$link=mysqli_connect("192.168.100.178","admin","loscos.2021","loscos") or die("No se pudo establecer la conexión con la Base de Datos.");

$sql= "UPDATE incidencias SET estado='0' WHERE idIncidencia='".$_POST['id']."'"; 
$result= mysqli_query($link, $sql) or die ('Error en la consulta.');

header ("Location: ../incidencias/index.php");
?>
