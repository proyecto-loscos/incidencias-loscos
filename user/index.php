<html>
<head>
    <title>Iniciar sesión</title>
    <meta charset='utf-8'/>
    <link rel="stylesheet" href="estilo.css"/>
</head>
<body>
    <div class="form">
      <div class="thumbnail"><img src="media/logo.png"/></div>
          <form class="login-form" action="control.php" method="POST">
            <input type="text" placeholder="Nombre de usuario" name="usuario" size="8" maxlength="50"/>
            <input type="password" placeholder="Contraseña"name="contrasena" size="8" maxlength="50"/>
            <input type="submit" value="Iniciar sesión" class="submit"/>
            <?php
            if (isset($_GET["error"]))
            if ($_GET["error"]=="si"){?>
            <span>Usuario o contraseña incorrectos</span>
            <?php }?>
          </form>
    </div>
</body>
</html>
