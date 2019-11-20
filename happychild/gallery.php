<?php
include 'connect.php';
include 'config.php';
include 'img.php';
?>

$sql = "select * from images order by counter desc";
$res = mysqli_query($connect, $sql);

while ($row = mysql_fetch_array($res));{
    echo <a href="<?=IMG_BIG.$images[i];?>"><img src="<?=IMG_SMALL.$images[$i];?>"></a> ?>
