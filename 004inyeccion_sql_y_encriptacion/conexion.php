<?php
$conexion = mysqli_connect('localhost', 'root', '', 'inyeccion_sql');
if (!$conexion) {
  die('conexion fallida' . mysqli_error($conexion));
}

function crear_nuevo() {
  global $conexion;
  if (isset($_POST['crear'])) {
    $nombre = $_POST['nombre'];
    $clave = $_POST['clave'];
    #PARA EVITAR INYECCIONES SQL
    # USAR LO SIGUIENTE
    // $nombre = mysqli_real_escape_string($conexion, $nombre);
    // $clave = mysqli_real_escape_string($conexion, $clave);
    #LA CLAVE DEBE SER ENCRIPTADA
    $formato_para_hashear = "$2y$10$";
    #https://www.php.net/manual/es/function.crypt.php
    $salt = $formato_para_hashear . "cadenitade22caracteres";
    $clave = crypt($clave, $salt);
    $consulta = "INSERT INTO usuarios(nombre, clave) VALUES ('$nombre','$clave')";
    echo $consulta;
    $result = mysqli_query($conexion, $consulta);
    if (!$result) {
      die("insercion fallida");
    }
  }
}

function leer() {
  global $conexion;
  if (isset($_POST['leer'])) {
    $consulta = "SELECT nombre, clave FROM usuarios";
    $result = mysqli_query($conexion, $consulta);
    if (!$result) {
      die("seleccion fallida");
    }
    return $result;
  }
  return null;
}
?>