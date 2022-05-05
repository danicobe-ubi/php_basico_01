<?php
class Car {
  var $llantas;
  var $puertas;

  function __construct($llantas, $puertas) {
    $this->llantas = $llantas;
    $this->puertas = $puertas;
  }

  function Arrancar() {
    echo "Arrancando en 3 2 1 ...";
  }
}

$car = new car(3, 5);
echo $car->llantas . " " . $car->puertas;
?>