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

// Step1: usar una builtin math function e imprimir usando echo
// en mi ejemplo usare la formula de trigonometria:
// sen^2(x) + cos^2(x) = 1
$angulo = 30;
// la formula se traduce en php de la siguiente manera:
echo pow(sin($angulo), 2) + pow(cos($angulo), 2); #Esto deberia ser 1

// Step2: usar una builtin string function e imprimir usando echo
// para obtener una sub cadena
$oracion_1 = 'me encanta salir al cine';
echo '<br>';
echo substr($oracion_1, 11, 5);
// Step3: usar una builtin array function e imprimir usando ehco
// para dar la vuelta a un arreglo
$lista = array(1, 2, 3, 4, 5, 6, 7);
echo '<br>';

print_r(array_reverse($lista));
?>
</body>
</html>