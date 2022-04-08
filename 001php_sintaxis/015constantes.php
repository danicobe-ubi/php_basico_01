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
// Las variables son estas
$number = 10;
echo $number;
// Para las constantes, necesitamos usar los metodos
// propios de php, en este caso "define('nombre_de_variable', 'valor')"
// La caracteristica de este tipo de variable es la siguiente:
// Una vez dado un valor ESTE JAMAS PODRA SER CAMBIADO
define('NAME', 1000);

echo NAME;

// Segun documentacion otra forma de definir constantes
// es la siguiente

// Works as of PHP 5.3.0

const CONSTANT = 'Hello World';

echo CONSTANT;

// Works as of PHP 5.6.0

const ANOTHER_CONST = CONSTANT . '; Goodbye World';

echo ANOTHER_CONST;

const ANIMALS = array('dog', 'cat', 'bird');

echo ANIMALS[1]; // outputs "cat"

?>
</body>
</html>