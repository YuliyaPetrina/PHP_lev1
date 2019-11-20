<?php
define("SERVER", "study");
define("LOGIN", "root");
define("PASS", "");
define("DB", "lesson06");

$connect = mysqli_connect(SERVER, LOGIN, PASS, DB) or die("Ошибка соединения с базой данных!");
//mysql_query('utf8_general_ci')
//mysql_select_db("goods");
?>