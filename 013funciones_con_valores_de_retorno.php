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
// Convocamos, llamamos, corremos y ejecutamos la funcion de la siguiente forma
$numero_par = 20000;
$numero_impar = 20001;
$numero_resultado = sumar($numero_par, $numero_impar);
echo $numero_resultado; //resultado = 20000 + 20001 = 40001
// ahora, tambien podemos recalcular nuestra variable numero resultado
// de la siguiente forma
echo '</br>';
$numero_resultado = sumar($numero_resultado, $numero_impar);
echo $numero_resultado; //resultado = 40001 + 20001 = 60001 + 20001

// Definimos la funcion saludar, con el parametro "nombre_persona"
// en otras palabras una funcion con parametros
function sumar($numero1, $numero2) {
  return $numero1 + $numero2;
}

?>
</body>
</html>