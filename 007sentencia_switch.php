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
// se usa cuando tenemos varios casos para ser evaluados como ser
$numero = 4;

if ($numero == 2) {
  echo 'es igual a 2';
}
if ($numero == 4) {
  echo 'es igual a 4';
}
if ($numero == 6) {
  echo 'es igual a 6';
}
if ($numero == 8) {
  echo 'es igual a 8';
}
if ($numero == 10) {
  echo 'es igual a 10';
}
if ($numero == 12) {
  echo 'es igual a 12';
}
echo '<br>';
// para evitar el uso de muchas condiciones podemos usar switch para multiples condiciones

$number = 11;

switch ($number) {
case 2: //Evaluamos el numero si cumple con el caso
  echo 'es igual a 2';
  break; //la sentencia break nos ayuda a terminar el bloque una vez cumplida la condicion
case 4:
  echo 'es igual a 4';
  break;
case 6:
  echo 'es igual a 6';
  break;
case 8:
  echo 'es igual a 8';
  break;
case 10:
  echo 'es igual a 10';
  break;

default: //default nos ayuda a correr un caso por defecto, en caso de que no se cumpla ninguna condicion
  echo "no podemos encontrar un valor para esta caso " . $number;
  break;
}
?>
</body>
</html>