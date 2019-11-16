-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Ноя 16 2019 г., 06:51
-- Версия сервера: 10.3.13-MariaDB
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `lesson05`
--

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `path_small` varchar(100) NOT NULL,
  `path_big` varchar(100) NOT NULL,
  `size` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `counter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id`, `path_small`, `path_big`, `size`, `title`, `counter`) VALUES
(1, '\\study\\images\\img_small', '\\study\\images\\img_big', 12, 'it_01.jpg', 1),
(2, '\\study\\images\\img_small', '\\study\\images\\img_big', 14, 'it_02.png', 1),
(3, '\\study\\images\\img_small', '\\study\\images\\img_big', 7, 'it_03.jpg', 1),
(4, '\\study\\images\\img_small', '\\study\\images\\img_big', 8, 'it_04.jpg', 1),
(5, '\\study\\images\\img_small', '\\study\\images\\img_big', 13, 'it_05.jpg', 1),
(6, '\\study\\images\\img_small', '\\study\\images\\img_big', 14, 'it_06.jpg', 1),
(7, '\\study\\images\\img_small', '\\study\\images\\img_big', 5, 'it_07.png', 1),
(8, '\\study\\images\\img_small', '\\study\\images\\img_big', 14, 'it_08.jpg', 1),
(9, '\\study\\images\\img_small', '\\study\\images\\img_big', 14, 'it_09.jpg', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
