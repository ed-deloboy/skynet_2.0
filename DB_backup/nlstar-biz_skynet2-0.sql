-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Хост: 10.0.0.155:3306
-- Время создания: Дек 21 2022 г., 21:17
-- Версия сервера: 10.1.48-MariaDB
-- Версия PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `nlstar-biz_skynet2-0`
--

-- --------------------------------------------------------

--
-- Структура таблицы `requests`
--

CREATE TABLE `requests` (
  `id` bigint(20) NOT NULL,
  `type` smallint(6) NOT NULL,
  `view` tinyint(4) DEFAULT '0',
  `apparat_name` varchar(255) DEFAULT NULL,
  `theme_request` varchar(255) DEFAULT NULL,
  `city` smallint(6) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `time_request` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `requests`
--

INSERT INTO `requests` (`id`, `type`, `view`, `apparat_name`, `theme_request`, `city`, `phone`, `time_request`) VALUES
(1, 1, 0, 'iPhone 13/13 Pro/13 Pro Max/13 mini', 'Не включается', 1, '+79887878787', '2022-12-21 12:11:48'),
(2, 1, 0, 'iPhone 13/13 Pro/13 Pro Max/13 mini', 'Тормозит', 2, '+79887878777', '2022-12-21 12:12:27'),
(3, 1, 0, 'Honor 20/20 Lite/20S/20E', 'Отклеился дисплей', 3, '+79887878888', '2022-12-21 12:13:20'),
(4, 1, 1, 'Honor 20/20 Lite/20S/20E', 'Отклеился', 3, '+7988787555', '2022-12-20 12:13:20'),
(5, 1, 0, 'iPhone 13/13 Pro/13 Pro Max/13 mini', 'Нет изображения', 1, '+7868768', '2022-12-21 15:07:55'),
(6, 1, 0, 'iPhone 13/13 Pro/13 Pro Max/13 mini', 'Нет изображения', 1, '+786889889898', '2022-12-21 15:08:01'),
(7, 1, 0, 'iPhone 13/13 Pro/13 Pro Max/13 mini', 'Нет изображения', 1, '+79887654321', '2022-12-21 15:08:11'),
(8, 1, 0, 'iPhone 12/12 Pro/12 Pro Max/12 mini', 'Не включается', 1, '+78776767676', '2022-12-21 19:10:41'),
(9, 1, 0, 'iPhone 13/13 Pro/13 Pro Max/13 mini', 'Не включается', 2, '+79887676767', '2022-12-21 21:41:46'),
(10, 1, 0, '', '', 0, '+7', '2022-12-21 21:42:09');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `requests`
--
ALTER TABLE `requests`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
