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
// https://www.php.net/manual/es/ref.strings.php

// Para obtener el tamano de una cadena
$cadena = 'soy una cadena demasiada corta';
$tamano_cadena = strlen($cadena);
echo $tamano_cadena;
echo '<br>';
// Para convertir la cadena en mayuscula
$cadena_mayuscula = strtoupper($cadena);
echo $cadena_mayuscula;
echo '<br>';
// para convertir la cadena en minuscula
$cadena_minuscula = strtolower($cadena_mayuscula);
echo $cadena_minuscula;
echo '<br>';
?>
</body>
</html>