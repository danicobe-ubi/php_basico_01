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
// las variables son contenedores para almacenar informacion y usarlos a travez de sus nombres
// a veces se usa var, pero en este caso para php para crear una variable se usa el simbolo de $
$name = "DaniCoBe"; //Cadena String Datatype
$number = 123; //numero Integer Datatype
$float = 123.233; //decimal Float Datatype
//good practices is to uppercase the second word "$myVariable"
// Mal ejemplo de nombrar una variable seria $my-variable
// $name y $Name son diferentes por que es case sensitive osea porque se hace una diferencia entre mayusculas y minisculas

echo $name . " " . $float;
?>
</body>
</html>