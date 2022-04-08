<?php
// $_POST es un arreglo asociativo PARTE de php (YA ESTA DEFINIDO POR PHP)
// isset($variable)
// Esta funcion pregunta si $variable ha sido definida
// En nuestro caso estamos preguntando si el arreglo asociativo contiene algun valor para
// la llave o clave "submit"
// en otras palabras, estamos preguntando si el usuario presiono el boton submit
if (isset($_POST["submit"])) {
  $nombres = array('Daniel', 'Alejandro', 'Andres', 'Sergio', 'Adrian');
  $username = $_POST["username"];
  $password = $_POST["password"];
  $maximo_caracteres = 10;
  $minimo_caracteres = 5;
  // Preguntaremos si el $username tiene tamano entre 5 y 10
  if (strlen($username) <= $minimo_caracteres) {
    echo 'el nombre de usuario debe ser mayor a 5 caracteres';
  } elseif (strlen($username) >= $maximo_caracteres) {
    echo 'el nombre de usuario debe ser menor a 10 caracteres';
  }
  // Preguntamos si el $username no es parte del arreglo de $nombres
  if (!in_array($username, $nombres)) {
    echo 'No formas parte de nuestros registros';
  } else {
    echo 'Bienvenido ' . $username;
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <!-- Cuando se haga click en el boton submit -->
  <!-- el sitio web mostrara lo que se tiene en action, en nuestro caso -->
  <!-- 001formularios.php, a travez del metodo POST -->
  <form action="001formularios.php" method="POST">
    <input type="text" name="username" placehoder="Enter username">
    <input type="password" name="password" placehoder="Enter password">
    <input type="submit" name="submit">
  </form>
</body>
</html>