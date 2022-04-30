<?php
include './conexion.php';
crear_nuevo();
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
  <form action="crear_usuario.php" method="POST">
    <input type="text" name="nombre" placeholder="nombre de usuario">
    <input type="password" name="clave" placeholder="clave">
    <input type="submit" value="crear" name="crear">
  </form>
</body>
</html>