<?php
include 'connect.php';
include 'config.php';
include 'gallery.php';
include 'img.php';
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Детские игрушки</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <img src="img/logo.jpg" alt="Logo">
            </div>
            <ul class='menu'>
                <li><a href="index.php">Главная</a></li>
                <li><a href="catalog.php">Каталог</a></li>
                <li><a href="contacts.php">Контакты</a></li>
                <li><a href="registration.php">Регистрация</a></li>
            </ul>
        </div>
        <hr>
        <div class="content">
            <h1>Каталог игрушек</h1>
            <!--           <ul class="catalog_list">
                <li>
                    <a href="catalog/car_1_yellow.php">
                        <img class="catalog_img" src="img/car_1_yellow.jpg" alt="Машинка жёлтая мини" title="Машинка жёлтая мини" />
                        <br>
                        Машинка жёлтая мини
              </a>
                </li>
                <li>
                    <a href="catalog/car_2_samosval.php">
                        <img class="catalog_img" src="img/car_2_samosval.jpg" alt="Самосвал мини" title="Самосвал мини" />
                        <br>
                        Самосвал мини
                    </a>
                </li>
                <li>
                    <a href="catalog/car_3_cat.php">
                        <img class="catalog_img" src="img/car_3_cat.jpg" alt="Кошка обучающая" title="Кошка обучающая" />
                        <br>
                        Кошка обучающая
                    </a>
                </li>
            </ul> -->
        
        <div class="list">
            <?php
            $sqltable = 'goods';
            include 'gallery.php';
            ?>
        </div>
        
        </div>
        <hr>
    </div>
</body>

<div class="footer">
    <footer>&copy; Все права защищены</footer>
</div>

</html>
