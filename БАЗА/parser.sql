-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 02 2018 г., 15:44
-- Версия сервера: 5.7.20
-- Версия PHP: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `parser`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `image`) VALUES
(182, 'generator1.jpg'),
(183, 'generator2.jpg'),
(184, 'generator3.jpg'),
(185, 'generator4.jpg'),
(186, 'generator5.jpg'),
(187, 'generator6.jpg'),
(188, 'generator7.jpg'),
(189, 'generator8.jpg'),
(190, 'generator9.jpg'),
(191, 'generator10.jpg'),
(192, 'generator11.jpg'),
(193, 'generator12.jpg'),
(194, 'generator13.jpg'),
(195, 'generator14.jpg'),
(196, 'generator15.jpg'),
(197, 'generator16.jpg'),
(198, 'generator17.jpg'),
(199, 'generator18.jpg'),
(200, 'generator19.jpg'),
(201, 'generator20.jpg'),
(202, 'generator21.jpg'),
(203, 'generator22.jpg'),
(204, 'generator23.jpg'),
(205, 'generator24.jpg'),
(206, 'generator25.jpg'),
(207, 'generator26.jpg'),
(208, 'generator27.jpg'),
(209, 'generator28.jpg'),
(210, 'generator29.jpg'),
(211, 'generator30.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
