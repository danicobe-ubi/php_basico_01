<?php
class Car {
  var $llantas = 4;
  var $puertas = 4;
  var $motor = 1;

  function MoverLlantas() {
    echo "Mover llantas";
  }
  function agregarLlantas() {
    $this->llantas = 400;
  }
}

$toyota = new Car();
echo $toyota->llantas;
echo "<br>";
$toyota->llantas = 24;
echo $toyota->llantas;
echo "<br>";
$toyota->agregarLlantas();
echo $toyota->llantas;

?>