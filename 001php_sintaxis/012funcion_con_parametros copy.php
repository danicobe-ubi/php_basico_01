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
saludar("Juan Lopez");
agregar_salto_de_linea();
elevar_a_exponente(10, 2);

// Definimos la funcion saludar, con el parametro "nombre_persona"
// en otras palabras una funcion con parametros
function saludar($nombre_persona) {
  echo 'Buenos Dias ' . $nombre_persona;
}
// Definimos la funcion elevar_a_exponente, con el parametro numero_base, numero_exponente
// en otras palabras una funcion con parametros sin valores de retorno
function elevar_a_exponente($numero_base, $numero_exponente) {
  // Utilizamos la funcion builtin(osea propia de php) "pow"
  echo pow($numero_base, $numero_exponente);
}
// Definimos la funcion decir_algo, sin paremetros y sin valores de retorno
// en otras palabras una funcion con parametros sin valores de retorno
function agregar_salto_de_linea() {
  echo "<br>";
}

?>
</body>
</html>