<?php
$clave = "soy una clave";
$formato_de_hash = "$2y$10$";
$salt = $formato_de_hash . "estodebetener22letras0";
$hash = crypt($clave, $salt);
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
<h1>
  <?php echo $hash ?>
</h1>
</body>
</html>