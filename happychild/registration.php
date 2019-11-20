<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
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
            <h1>Регистрация</h1>
            <form action="#">
                Имя: <br> <input type="text" placeholder="Ваше имя"><br>
                Пароль: <br> <input type="password" placeholder="Пароль"><br>
                Email: <br> <input type="email" placeholder="Email"><br>
                Пол: <br> М<input type="radio" name="pol"> Ж<input type="radio" name="pol"> <br>
                Ваши увлечения:<br>
                Спорт <input type="checkbox"><br>
                IT <input type="checkbox"><br>
                Музыка <input type="checkbox"><br>
                <input class="press" type="submit" value="Отправить"> <input class="press" type="reset" value="Отмена">
            </form>
        </div>
        <hr>
        <div class="footer">
            <footer>&copy; Все права защищены</footer>
        </div>
    </div>
</body></html>
