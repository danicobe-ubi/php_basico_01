<?php
class Car {
  public $windows = 6;
  protected $engine = 1;
  private $doors = 4;

  function getDoors() {
    return $this->doors;
  }
  function setDoors($doors) {
    return $this->doors = $doors;
  }
}

$car = new Car();
// con privados
// echo $car->doors; error!! propiedad privada... solo se puede acceder a travez de metodos
echo $car->getDoors();
echo "<br>";
$car->setDoors(20);
echo $car->getDoors();
echo "<br>";
// con protejidos
class Truck extends Car {
  function mostrarEngine() {
    echo $this->engine;
  }
}

$truck = new Truck();
echo $truck->mostrarEngine();
echo "<br>";
// con publicos
echo $car->windows;
echo "<br>";
$car->windows = 200;
echo $car->windows;
?>