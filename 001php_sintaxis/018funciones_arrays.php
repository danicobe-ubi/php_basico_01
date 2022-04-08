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
// Builtin functions se traduce a:
// Funciones definidas por el lenguaje
// son herramientas propias del lenguaje
// todas las funciones soportadas por php se encuentran aca
// https://www.php.net/manual/es/ref.array.php

$numeros = [30, 20, 10, 70, 50];
// NOTA: de haber creado el arreglo de esta forma
// $numeros = array(30, 20, 10, 70, 50);
// Daria el mismo resultado

// funcion max(), es para obtener el numero mas grande del vector
echo max($numeros);
echo '<br>';
// funcion min(), es para obtener el numero mas pequeno del vector
echo min($numeros);
// funcion print_r() para imprimir todo el arreglo
echo '<br>';
print_r($numeros);
// funcion sort() para ordenar el arreglo
sort($numeros);
echo '<br>';
print_r($numeros);

?>
</body>
</html>