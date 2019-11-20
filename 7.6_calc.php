<?php
   if ($_SERVER['REQUEST_METHOD'] == "GET") {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $operation = $_GET['operation'];
    $reset = $_GET['reset'];
    if ($reset) {
        $view = "";
        $num1 = "";
        $num2 = "";
        $operation = false;
        $view = "";
    }
    if ($operation) {
        if ($operation == "+") {
            $res = $num1 + $num2;
        }
        if ($operation == "-") {
            $res = $num1 - $num2;
        }
        if ($operation == "*") {
            $res = $num1 * $num2;
        }
        if ($operation == "/") {
            $res = ($num2 != 0) ? $num1 / $num2 : "На ноль делить нельзя.";
        }
        $view = $res;
    }
}
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>Calculator</title>
</head>

<body style="width:50%; margin:0 auto;">
    <h2>Калькулятор</h2>
    <hr>

    <form action="" method="GET">
        Число 1: <input name="num1" type="text" value="<?= $num1 ?>"><br><br>
        Число 2: <input name="num2" type="text" value="<?= $num2 ?>"><br><br>

        <select name="operation" onchange="submit()">
            <option value="">Выберите действие из списка</option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select><br><br>
        
        <p>или используйте кнопки:</p>
        <input name="operation" value="+" type="submit" />
        <input name="operation" value="-" type="submit" />
        <input name="operation" value="*" type="submit" />
        <input name="operation" value="/" type="submit" />
        <input name="reset" value="Очистить" type="submit" />
        <br><br>

        Результат: <input name="result" type="text" value="<?= $view ?>" disabled />
    </form>

</body>

</html>
