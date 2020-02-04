<?php
session_start();
if (empty($_SESSION['nombre'])){
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Login</title>
</head>

<body>
  <form action="validar.php" method="post" enctype="application/x-ww-form-urlencoded">
    <label for="caja1">
      <p>Nombre de Usuario</p>
      <p><input type="text" id="caja1" name="usuario" placeholder="Usuario"></p>
    </label>
    <label for="caja2">
      <p>Contraseña</p>
      <p><input type="password" id="caja2" name="password" placeholder="Contraseña" required></p>
    </label>
    <input type="submit" value="Iniciar sesion">
  </form>
  <p>O mas bien:</p>
  <button onclick="registrar()">Registrate</button>
  <script type="text/javascript">
    function registrar() {
      window.location = "registrar.php";
    }
  </script>
</body>

</html>
<?php

}else{
  print 'bienvenido '.$_SESSION['nombre'].'<br>
  <p><a href="cerrar.php">Cerrar Sesion</a></p>';
}
?>
