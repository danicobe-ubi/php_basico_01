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
// por ejemplo la funcion "pow(base, exponente)" que nos permite elevar un determinado numero a un determinado exponente
// todas las funciones soportadas por php se encuentran aca
// https://www.php.net/manual/en/ref.math.php
$tres_al_cuadrado = pow(3, 2);
echo $tres_al_cuadrado;
echo '<br>';
// Funcion para obtener numero random
echo rand();
echo '<br>';
// Funcion para obtener numero random entre dos numeros
echo rand(1, 5);
echo '<br>';
// Funcion para obtener la raiz cuadrada de un numero
echo sqrt(81);
echo '<br>';
// Funcion para rendondear hacia arriba
echo ceil(4.5);
// Funcion para rendondear hacia abajo
echo '<br>';
echo floor(4.5);
// Funcion para rendondear dependiendo de los decimales
echo '<br>';
echo round(4.4);
?>
</body>
</html>