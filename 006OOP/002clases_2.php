<?php
class Car {
  function MoveWheels() {
    echo "bruum, brumm, moving...";
  }
}
// Para verificar si un metodo existe
if (method_exists("Car", "MoveWheels")) {
  echo "El metodo existe";
} else {
  echo "nel, no existe";
}
?>