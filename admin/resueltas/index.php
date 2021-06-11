<?php
	include("seguridad.php");
?>
<html>
    <head>
        <title>Incidencias resueltas</title>
        <meta charset='utf-8'/>
        <link rel="stylesheet" href="estilo.css"/>
    </head>

    <body>
       <div class="form">
            <h1>Incidencias resueltas</h1>
            <?php $link=mysqli_connect("192.168.100.178","admin","loscos.2021","loscos") or die("No se pudo establecer la conexión con la Base de Datos.");

             $sql= "select idIncidencia, nombreUsuario, equipo, tipo, descripcion, estado from incidencias where estado='1'" ;    

             $result= mysqli_query($link, $sql) or die ('Error en la consulta.');

             while($fila = mysqli_fetch_array($result)) {
                echo "
                    <form action='update.php' method='post'>
                        <h2>Incidencia nº ".$fila['idIncidencia']." - ".$fila['tipo']."</h2>
                        <p><strong>Nombre de usuario: </strong>".$fila['nombreUsuario'].".</p>
                        <p><strong>Equipo: </strong>".$fila['equipo'].".</p>
                        <p><strong>Descripción: </strong>".$fila['descripcion']."</p>
                        <p><strong>Estado: </strong>Resuelto.</p>
                        <input type='submit' value='Marcar como no resuelto'/>
                        <input type='hidden' name='id' value='".$fila['idIncidencia']."'/>
                    </form>
                    <br/>
                ";
             }; ?>
            <br/><a href="../incidencias/index.php"><strong>No resueltas</strong></a>
            <br/><br/><br/><br/><a href="../index.php"><strong>Salir</strong></a>
        </div>
    </body>
</html>
