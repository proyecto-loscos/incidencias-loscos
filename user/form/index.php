<?php
include('seguridad.php');
?>
<html>
    <head>
        <title>Formulario de incidencias</title>
        <meta charset='utf-8'/>
        <link rel="stylesheet" href="estilo.css"/>
    </head>
    <body>
        <div class="form">
            <h1>Formulario de incidencias</h1>
            <form action='control.php' method='POST'>
                <!--Salta un error si hubo algún problema-->
                <?php
                if (isset($_GET["error"]))
                if ($_GET["error"]=="si"){?>
                <span>¡Oops! Error inesperado. Por favor. vuelve a completar el formulario.</span>
                <br/><br/>
                <?php }?>
                <br/>
                <label for="nombreusuario">Nombre de usuario</label> <br/><br/>
                    <input type="text" id="nombreusuario" name="usuario"/> <br/>
                <label for="equipo">Equipo</label> <br> <br/>
                  <?php
                    echo "<select id='tipo' name='equipo'>";
                    $i= 0;
                    while ( $i <= 9 ) {
                        echo $i++;
                        echo "<option value= '$i'>$i</option>";
                    }
                    echo "</select> <br/>";
                    ?>
                <label for="tipo">Tipo</label> <br/><br/>
                    <select id="tipo" name='tipo'>
                        <option value="Periféricos">Teclado/ratón</option>
                        <option value="Red">Red</option>
                        <option value="Monitor">Monitor</option>
                        <option value="Software">Programa</option>
                        <option value="Recursos compartidos">Carpetas compartidas</option>
                        <option value="Teléfono">Teléfono</option>
                        <option value="Impresora">Impresora</option>
                        <option value="Correo">Correo electrónico</option>
                        <option value="Otro">Otro</option>
                    </select> <br/>
                <label for="descripcion">Descripción</label><br/><br/>
                    <textarea id="descripcion" rows="15" value="descripcion" name="descripcion" style="resize: none;" maxlength="400"></textarea> <br/><br/>
                <input type="submit" class="submit" value="Enviar"/>
            </form>
        </div>
    </body>
</html>
