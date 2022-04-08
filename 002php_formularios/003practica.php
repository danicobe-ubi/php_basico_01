<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php

// Step1: Hacer un formulario que envie cualquier valor a la variable global $_POST
if (isset($_POST["submit"])) {
  echo 'Tu mascota se llama ' . $_POST["nombre_de_mascota"];
}
?>

<form action="003practica.php" method="post">
  <input type="text" name="nombre_de_mascota" placeholder="Ingresa el nombre de tu mascota">
  <input type="submit" name="submit">
</form>
</body>
</html>