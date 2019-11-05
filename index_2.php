<?php

/* 1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу:
если $a и $b положительные, вывести их разность;
если $а и $b отрицательные, вывести их произведение;
если $а и $b разных знаков, вывести их сумму;
ноль можно считать положительным числом. */
/*
$a = rand(-99, 99);
$b = rand(-99, 99);

if ($a > 0 && $b > 0) {
    echo $a - $b;
}
else {
if ($a < 0 && $b < 0) {
    echo $a * $b;
    }
else {
    echo $a + $b;
    }
}
*/


/* 2. Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15. */
/*
$a = rand(0, 15);

switch ($a) {
    case 1:
        echo "1, ";
    case 2:
        echo "2, ";
    case 3:
        echo "3, ";
    case 4:
        echo "4, ";
    case 5:
        echo "5, ";
    case 6:
        echo "6, ";
    case 7:
        echo "7, ";
    case 8:
        echo "8, ";
    case 9:
        echo "9, ";
    case 10:
        echo "10, ";
    case 11:
        echo "11, ";
    case 12:
        echo "12, ";
    case 13:
        echo "13, ";
    case 14:
        echo "14, ";
    case 15:
        echo "15";
    break;
    default:
    	echo "a < 0 и > 15";
}
*/


/* 3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return. */
/*
$a = rand(-99, 99);
$b = rand(-99, 99);

function sum($a, $b) {
    return $a + $b;
}

function sub($a, $b) {
    return $a - $b;
}

function mult($a, $b) {
    return $a * $b;
}

function div($a, $b) {
    return $a / $b;
}
*/


/* 4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch). */
/*
$arg1 = rand(-99, 99);
$arg2 = rand(-99, 99);

function mathOperation($arg1, $arg2, $operation){
    switch ($operation) {
    case "+":
        return $arg1 + $arg2;
    break;
    case "-":
        return $arg1 - $arg2;
    break;
    case "*":
        return $arg1 * $arg2;
    break;
    case "/":
        return $arg1 / $arg2;
    break;
    default:
        echo "Unknown operation";
    }
}

echo mathOperation($arg1, $arg2, "/");
*/


/* 5. Посмотреть на встроенные функции PHP. Используя имеющийся HTML шаблон, вывести текущий год в подвале при помощи встроенных функций PHP. */
/*  добавлена запись в файле index_minimalistica.php в блок <div id="footer">:
    <p><?=$_year;?></p>
*/


/* 6. *С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень. */
/*
$val = rand(-99, 99);
$pow = rand(-99, 99);

function power($val, $pow) {
    if ($val == 0)
        return 0;
    elseif ($pow == 0)
        return 1;
    elseif ($pow < 0)  
        return power(1/$val, -$pow);
    else return $val * power($val, $pow-1);
}
echo power($val, $pow);
*/


/* 7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например: 22 часа 15 минут 21 час 43 минуты */

$h = date("H");
$m = date("i");

if ($h == 1 || $h == 21) {
$hours = " час";
}
elseif (($h >= 2 && $h <= 4) || ($h >= 22 && $h <= 24)) {
$hours = " часа";
}
else {
    $hours = " часов";
}
if (($m % 10) === 1) {
$minutes = " минута";
}
elseif ((($m % 10) >= 2) && (($m % 10) <= 4)) {
$minutes = " минуты";
}
else {
$minutes = " минут";
}
echo $h . $hours . " " . $m . $minutes;
