<!-- Instrucciones -->
<!-- 1: Crear un enlace que digas "Click aca", y mandarle parametros para luego -->
<!--    leerlos con la super global GET -->
<!-- 2: Crear una cookie que expire en una semana -->
<!-- 3: Crea una Sesion con la valor que desees -->
<?php
session_start();
echo $_SESSION['cliente_servidor'];
echo "<br>";
echo $_COOKIE['mi_cookie'];

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
</body>
</html>