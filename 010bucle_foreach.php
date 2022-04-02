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
// Este bucle es especial para los arreglos o vectores
// ya que recorre automaticamente todos los valores del arreglo

$lista_de_compras = array('Frutas', 'Verduras', 'Carne', 'Refresco');

// La sintaxis es la siguiente
foreach ($lista_de_compras as $producto) {
  // esto se traduce a:
  // PARA CADA $producto DE MI $lista_de_compras hacer lo siguiente:
  echo 'Producto: ' . $producto;
  echo '<br>';
}

?>
</body>
</html>