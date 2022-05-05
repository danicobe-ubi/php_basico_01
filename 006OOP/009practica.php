<?php
// 1: crear la clase perro
// 2: crear propiedades para perro como color de ojos, naris y pelaje
// 3: crear una funcion ShowAll para mostrar las propiedades del perro
// 4: instanciar la clase (osea crear un objeto) y llamarlo pitbull
// 5: llamar el metodo ShowAll
class Perro {
  private $color_de_ojos;
  private $color_de_naris;
  private $color_de_pelaje;

  public function __construct($color_de_ojos, $color_de_naris, $color_de_pelaje) {
    $this->color_de_ojos = $color_de_ojos;
    $this->color_de_naris = $color_de_naris;
    $this->color_de_pelaje = $color_de_pelaje;
  }

  public function mostrarTodo() {
    echo $this->color_de_ojos . ' ' . $this->color_de_naris . ' ' . $this->color_de_pelaje;
  }
}

$pitbull = new Perro('cafes', 'negra', 'cafe');

$pitbull->mostrarTodo();
?>