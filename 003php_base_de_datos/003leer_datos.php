<?php
$connection = mysqli_connect('localhost', 'root', '', 'test');

if ($connection) {
  echo 'Logramos establecer conexion';
} else {
  die('conexion Fallida');
}

// consulta para leer datos
$query = "SELECT * FROM usuarios";

$result = mysqli_query($connection, $query);
// la consulta ha fallado?
if (!$result) {
  die('Consulta fallida' . mysqli_error());
}

echo '<br>';
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
<?php
while ($row = mysqli_fetch_assoc($result)) {
  ?>
<pre>
<?php
print_r($row);
  ?>
</pre>
<?php
}
?>

    </div>
  </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>