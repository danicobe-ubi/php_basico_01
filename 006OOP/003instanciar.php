<?php
class Car {
  function MoveWheels() {
    echo "Mover llantas";
  }
}

$toyota = new Car();
$mercedes = new Car();

$toyota->MoveWheels();
$mercedes->MoveWheels();
?>