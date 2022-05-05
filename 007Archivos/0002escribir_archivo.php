<?php
$archivo = "ejemplo.txt";
$manejador = fopen($archivo, 'w');
if ($manejador) {
  fwrite($manejador, 'Hola mundo');
  fclose($manejador);
} else {
  echo "No puedo escribir";
}
?>
