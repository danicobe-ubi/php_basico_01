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
// Step 1: Utilizar la sentencia "if", "elseif" y "else" para que al final imprima
// la siguiente cadena "I Love PHP"
if (10 < 2) {
  echo "diez no es menor que dos por lo tanto vamos a validad por la otra condicion elseif";
} elseif (5 < 2) {
  echo "cinco no es menor que dos por lo tanto vamos a ejecutar la ultima sentencia 'else'";
} else {
  echo "I Love PHP";
}
echo "<br>";

// Step 2: Utilizar el bucle "for" para mostrar 10 numeros
for ($contador = 0; $contador < 10; $contador++) {
  echo $contador . " ";
}

echo "<br>";
// Step3: utilizar la sentencia "switch" con 5 "cases" y utilizando "default"
$numero = 5;
switch ($numero) {
case 1:
  echo "soy el numero 1";
  break;
case 2:
  echo "soy el numero 2";
  break;
case 3:
  echo "soy el numero 3";
  break;
case 4:
  echo "soy el numero 4";
  break;
default:
  echo "al parecer soy el numero 5";
  break;
}
?>
</body>
</html>