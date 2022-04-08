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
// Step 1: crear 2 variables llamados numero 1 y numero2 y asginar 10 y 20 a ambos
$numero1 = 10;
$numero2 = 20;
// Step 2: sumar ambas variables y mostrar el resultado con la funcion echo
$resultado = $numero1 + $numero2;
echo $resultado;
echo "<br>";
// Step 3; Crear dos arreglos con los mismos valores, uno regular y otro asociativo
$vector_comun = array($numero1, $numero2, $resultado);
$vector_asociativo = array("numero_1" => $numero1, "numero_2" => $numero2, "resultado" => $resultado);
echo $vector_comun[2];
echo "<br>";
echo $vector_asociativo["resultado"];
echo "<br>";

?>
</body>
</html>