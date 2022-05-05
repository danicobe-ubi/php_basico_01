<?php
$archivo = "ejemplo.txt";
$manejador = fopen($archivo, 'r');
if ($manejador) {
  echo $contenido = fread($manejador, filesize($archivo));
  // el segundo parametro se refiere a los bytes que va a leer
  // cada byte = 1 caracter del documento .txt
  fclose($manejador);
} else {
  echo "No puedo escribir";
}
?>
