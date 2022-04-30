<?php
print_r($_GET);
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
  <a href="get.php?id=10">A link with static value</a>
  <?php
$id = 300;
?>
  <a href="get.php?id=<?php echo $id; ?>">A link with dynamic value</a>
</body>
</html>