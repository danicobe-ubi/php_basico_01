<?php
$conexion = mysqli_connect('localhost', 'root', '', 'practica_07');

if (!$conexion) {
  die('conexion fallida');
}

function leerDatos() {
  global $conexion;
  if (isset($_POST['leer'])) {
    $consulta = "SELECT * FROM usuarios";
    $resultado = mysqli_query($conexion, $consulta);
    if (!$resultado) {
      die("error" . mysql_error());
    }
    return $resultado;
  }
  return null;
}

?>