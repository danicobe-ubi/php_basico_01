<?php include "004consultas_funciones.php";?>
<?php include "004conexion_bd.php";?>
<?php

if (isset($_POST["crear"])) {
  echo "crear";
  crear_usuario();
}

if (isset($_POST["actualizar"])) {
  actualizar_usuario();
}

if (isset($_POST["eliminar"])) {
  eliminar_usuario();
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
      <form action="004usuario_CRUD.php" method="POST">
        <div class="mb-3">
          <label for="username">Username</label>
          <input type="text" id="username" name="username" class="form-control">
        </div>
        <div class="mb-3">
          <label for="password">Password</label>
          <input type="password" name="password" name="password" class="form-control">
        </div>
        <div class="mb-3">
          <select name="id" id="">

<?php
obtener_ids_usuarios();
?>
          </select>
        </div>
        <input type="submit" name="crear" class="btn btn-success" value="Crear">
        <input type="submit" name="actualizar" class="btn btn-success" value="Update">
        <input type="submit" name="eliminar" class="btn btn-success" value="Eliminar">
      </form>
    </div>
  </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>