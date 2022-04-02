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
// sintaxis para crear bucles con while
// mientras que la condicion se cumpla, el bucle sera eterno
$contador = 1;
// en total se repetira 10 veces
while ($contador <= 10) {
  echo $contador . ' hola <br>';
  // $contador = $contador + 1;
  $contador++;
}
?>
</body>
</html>