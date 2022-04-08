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

// Step1: Definir una funcion y hacer que return un calculo entre dos numeros
function calculo() {
  $numero_1 = 33;
  $numero_2 = 20;
  return $numero_1 + $numero_2;
}

$resultado = calculo();
echo calculo($resultado);
// Step2: Hacer una funcion que tome argumentos(osea parametros) y convocarlo (ejecutarlo) pasando los argumentos
// correspondientes
$numero_3 = 20;
$numero_4 = 200;
echo '<br>';
function division($argumento_1, $argumento_2) {
  return $argumento_2 / $argumento_1;
}

echo division($numero_3, $numero_4);
?>
</body>
</html>