<!DOCTYPE html>
<?php
include './002conexion.php';
$resultado = leerDatos();
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="001usuarios.php" method="POST">
    <input type="submit" name="leer" value="leer">
  </form>

  <?php
if ($resultado) {
  while ($fila = mysqli_fetch_assoc($resultado)) {
    ?>
    <pre>
      <?php
print_r($fila);
    ?>
    </pre>


    <?php
}
}
?>
</body>
</html>