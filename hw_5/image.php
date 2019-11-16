<?php
include_once 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Photo</title>
</head>
<body>
  <a href="index.php">Вернуться в галерею</a>
  <div>
    <img src="<?=IMG_BIG.$_GET['photo'] ?>">
  </div>
</body>
</html>
