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
// La sintaxis es la siguiente, este bucle recibe tres parametros
// la primera es la inicializacion de una variable
// la segunda es la condicion para que se detenga el bucle
// la tercera aumenta el valor del contador
for ($contador = 1; $contador <= 10; $contador++) {
  echo $contador . '<br>';
}
?>
</body>
</html>