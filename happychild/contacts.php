<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Контакты</title>
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
            <p class="callback"><b>Обратная связь</b></p>
            <div class="callback_form">
                <h2>Напишите нам</h2>
                <form action="#">
                    Имя:<br>
                    <input type="text" placeholder="Ваше имя"><br>
                    <br>
                    Email:<br>
                    <input class="letter" type="email" placeholder="Ваш email"><br>
                    <br>
                    Тема:<br>
                    <input class="letter" type="text" placeholder="Ваше обращение"><br>
                    <br>
                    <label>Ваш комментарий:<br>
                        <textarea cols="30" rows="10" name="message"></textarea>
                    </label>
                    <br>
                    <input class="press" type="submit" value="Отправить"> <input class="press" type="reset" value="Отмена">
                </form>
            </div>
            <h3>Адрес</h3>
            <ul class="contacts">
                <li><b><i>Телефон</i></b></li>
                <li><i>г.Москва, улица Ленина, дом 1</i></li>
                <li><i>email</i></li>
            </ul>

            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A422ca31643e31394dadde9022b53f8fa23bb9437452a167f3167ab287b624925&amp;source=constructor" frameborder="0"></iframe>
        </div>
        <hr>
        <div class="footer">
            <footer>&copy; Все права защищены</footer>
        </div>
    </div>
</body>

</html>
