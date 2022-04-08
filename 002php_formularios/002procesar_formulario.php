
<!-- Y aca esta el procesamiento -->
<?php

if (isset($_POST["submit"])) {
  $nombres = array('Daniel', 'Alejandro', 'Andres', 'Sergio', 'Adrian');
  $username = $_POST["username"];
  $password = $_POST["password"];
  $maximo_caracteres = 10;
  $minimo_caracteres = 5;
  if (strlen($username) <= $minimo_caracteres) {
    echo 'el nombre de usuario debe ser mayor a 5 caracteres';
  } elseif (strlen($username) >= $maximo_caracteres) {
    echo 'el nombre de usuario debe ser menor a 10 caracteres';
  }
  if (!in_array($username, $nombres)) {
    echo 'No formas parte de nuestros registros';
  } else {
    echo 'Bienvenido ' . $username;
  }
}
?>