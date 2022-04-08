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
decir_algo();
agregar_salto_de_linea();
calcular();

// Definimos la funcion decir_algo, sin paremetros y sin valores de retorno
// en otras palabras una funcion sencilla
function decir_algo() {
  echo 'Hola Estudiantes, como les va?';
}
// Definimos la funcion decir_algo, sin paremetros y sin valores de retorno
// en otras palabras una funcion sencilla
function calcular() {
  echo 123 + 867;
}
// Definimos la funcion decir_algo, sin paremetros y sin valores de retorno
// en otras palabras una funcion sencilla
function agregar_salto_de_linea() {
  echo "<br>";
}

?>
</body>
</html>