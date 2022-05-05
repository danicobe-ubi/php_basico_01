<?php
class Car {
  var $llantas = 4;
  var $puertas = 4;

  function Arrancar() {
    echo "Arrancando en 3 2 1 ...";
  }
}

class Plane extends Car {

}

$jet = new Plane();

echo $jet->llantas;
?>