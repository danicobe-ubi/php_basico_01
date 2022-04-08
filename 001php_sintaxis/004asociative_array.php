<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
$number = array(10, 20, 30);
// echo $number[2] . "<br>";
print_r($number);
echo "<br>";
// con este tipo de vectores podemos almacenar datos y acceder a ellos a travez de un nombre

$names = array("first_name" => 'Edwin', "last_name" => 'Coronel');
print_r($names);
echo "<br>";
echo $names["first_name"] . ' ' . $names["last_name"];
?>
</body>
</html>