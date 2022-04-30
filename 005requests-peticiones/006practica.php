<!-- Instrucciones -->
<!-- 1: Crear un enlace que digas "Click aca", y mandarle parametros para luego -->
<!--    leerlos con la super global GET -->
<!-- 2: Crear una cookie que expire en una semana -->
<!-- 3: Crea una Sesion con la valor que desees -->
<?php
echo $_GET['nombre'] . ' ' . $_GET['apellido'];
$expiracion = time() + (3600 * 24 * 7);
setcookie('mi_cookie', 'esto es una prueba!! este valor es del lado del cliente', $expiracion);
session_start();
$_SESSION['cliente_servidor'] = "Daniel Coronel Berrios";
if (isset($_SESSION['cliente_servidor'])) {
  echo $_SESSION['cliente_servidor'];
} else {
  echo " No Se ha creado la session que almacene el valor para cliente_servidor ";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<a href="006practica.php?id=24&nombre=daniel&apellido=coronel">Click!</a>
</body>
</html>