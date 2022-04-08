<?php
if (isset($_POST["submit"])) {

  $username = $_POST["username"];
  $password = $_POST["password"];
  // PARA XAMPP
  $connection = mysqli_connect('localhost', 'root', '', 'test');
  // PARA MAMP
  // $connectionC = mysqli_connect('localhost', 'root', 'root', 'test');

  if ($connection) {
    echo 'Logramos establecer conexion';
  } else {
    // Usaremos la funcion die() para parar la conexion y mostrar un error
    die('conexion Fallida');
  }
  echo '<br>';

  // Validamos si la data del formulario existe (si es distinto de null)
  // Equivale a preguntar "El username y el password existen?"
  if ($username && $password) {
    echo $username . $password;
  } else {
    echo 'Por favor llena tanto el username como el password';
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="col-sm-6">
      <form action="001conexion.php" method="POST">
        <div class="mb-3">
          <label for="username">Username</label>
          <input type="text" id="username" name="username" class="form-control">
        </div>
        <div class="mb-3">
          <label for="password">Password</label>
          <input type="password" name="password" name="password" class="form-control">
        </div>
        <input type="submit" name="submit" class="btn btn-success" value="Enviar">
      </form>
    </div>
  </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>