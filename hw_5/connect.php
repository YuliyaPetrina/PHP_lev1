<?php
define("SERVER", "study");
define("LOGIN", "root");
define("PASS", "");
define("DB", "lesson05");

$connect = mysqli_connect(SERVER, LOGIN, PASS, DB) or die("Ошибка соединения с базой данных!");
mysql_select_db("images");