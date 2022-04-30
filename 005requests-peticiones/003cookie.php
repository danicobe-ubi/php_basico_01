<?php
// $_COOKIE;

$name = "SomeName";
$value = 10000;
$expiration = time() + (3600 * 24 * 7);
setcookie($name, $value, $expiration);

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
  <?php
if (isset($_COOKIE["SomeName"])) {
  $name = $_COOKIE["SomeName"];
} else {
  $name = "nel";
}
echo $name;
?>
</body>
</html>