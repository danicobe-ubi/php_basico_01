<?php
include './conexion.php';
$resultado = leer();
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
  <form action="leer_usuario.php" method="POST">
      <input type="submit" value="leer" name='leer'>
  </form>
  <?php
if ($resultado) {
  while ($fila = mysqli_fetch_assoc($resultado)) {
    $nombre = $fila["nombre"];
    $clave = $fila["clave"];
    echo "usuario: $nombre clave: $clave";
    echo "<br>";
  }
}

?>
</body>
</html>