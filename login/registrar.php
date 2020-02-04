<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
  </head>
  <body>
  <form action="insertar.php" method="POST" enctype="application/x-www-form-urlencoded">
    <label for="caja1"><p>Nombre de usuario</p>
      <p><input type="text" id?="caja1" name="usuario" placeholder="nombre" required autofocus></p>
    </label>
    <label for="caja2"><p>Pasword</p>
    <p><input type="password" name="password" id="caja2" required placeholder="password"></p>
    </label>
    <input type="submit" value="Registrarse">
  </form>
  </body>
</html>
