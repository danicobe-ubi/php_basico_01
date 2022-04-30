<?php include "004conexion_bd.php"?>
<?php

function obtener_ids_usuarios() {
  $query = "SELECT id FROM usuarios";
  global $connection;
  $result = mysqli_query($connection, $query);
  if (!$result) {
    die('Consulta fallida' . mysqli_error());
  }

  while ($fila = mysqli_fetch_assoc($result)) {
    $id = $fila["id"];
    echo "<option>$id</option>";
  }
}

function crear_usuario() {
  $username = $_POST["username"];
  $password = $_POST["password"];

  global $connection;

  $query = "INSERT INTO usuarios(username, password) VALUES ('$username', '$password')";

  $result = mysqli_query($connection, $query);
  if (!$result) {
    die('Consulta fallida' . mysqli_error());
  }

}
function actualizar_usuario() {
  global $connection;
  $id = $_POST["id"];
  $username = $_POST["username"];
  $password = $_POST["password"];

  $query = "UPDATE usuarios SET username = '$username', password = '$password' where id = $id";

  $result = mysqli_query($connection, $query);

  if (!$result) {
    die("la consulta fallo" . mysqli_error($connection));
  }
}

function eliminar_usuario() {
  global $connection;
  $id = $_POST["id"];

  $query = "DELETE FROM usuarios where id = $id";

  $result = mysqli_query($connection, $query);

  if (!$result) {
    die("la consulta fallo" . mysqli_error($connection));
  }
}
function mostrar_datos() {
  global $connection;
  $id = $_POST["id"];

  $query = "DELETE FROM usuarios where id = $id";

  $result = mysqli_query($connection, $query);

  if (!$result) {
    die("la consulta fallo" . mysqli_error($connection));
  }
}

?>