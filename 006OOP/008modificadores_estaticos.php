<?php
class Car {
  private $llantas = 4;
  private $ventanas = 6;
  // definiremos una propiedad estatica
  // ES PARTE DE LA CLASE
  // NO ES PARTE DE LA INSTANCIA
  static $engine = 1;
}

$auto = new Car();
// Para usar la propiedad estatica
echo Car::$engine;
?>