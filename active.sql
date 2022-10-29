-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 10 2022 г., 11:46
-- Версия сервера: 8.0.24
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `active`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(4096) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `img`, `description`) VALUES
(11, 'Гель для душа Active для мужчин Men Sport Black 400 г.', 'res/img-uploads/1665149783body-wash-(-3-red)1549800464.png', 'Cодержит дезодорирующие вещества, устраняющие неприятный запах, возникающий при занятиях спортом, придает коже здоровье и свежесть. Гель для душа насыщен витамином B5 и придает коже ощущение свежести и мягкости за счет увлажнения поверхности кожи.   Инструкция по применению: Гель можно наносить непосредственно на тело, или при помощи мочалки. - В случае использования мочалки налейте на мочалку достаточное количество геля и вспеньте её. Ополосните тело и вымойте мочалкой с пеной. Тщательно смойте пену с тела.  Меры предосторожности:  Избегайте попадания в глаза. Хранить вдали от детей. Не употреблять внутрь. В случае попадания в глаза тщательно промыть водой. В случае употребления внутрь сразу проконсультируйтесь с лечащим врачом.'),
(12, 'Active Пена для Мытья Рук Light Pink 500 мл.', 'res/img-uploads/1665152095foam-handwash-pink-3d1549871226.png', 'Средство содержит глицериновый смягчитель, который благодаря высокому влагопоглощению способствует поддержанию и омоложению кожи, а также смягчает и предотвращает ее пересыхание. Специальный дозатор создаёт мягкую и объёмную пену.'),
(13, 'Active Пена для Мытья Рук Night Star 500 мл.', 'res/img-uploads/1665152136handwash-foam-new-(black)1576016824.jpg', 'Средство содержит глицериновый смягчитель, который благодаря высокому влагопоглощению способствует поддержанию и омоложению кожи, а также смягчает и предотвращает ее пересыхание. Специальный дозатор создаёт мягкую и объёмную пену.'),
(15, 'КУЗЮ КУЗЮ', 'res/img-uploads/1665173857foam-handwash-blue-3d1549871226.png', 'Кузюмузю'),
(17, 'ну вот товар', 'res/img-uploads/1665176855body-shampoo-400-red1549800141.png', 'и чё,');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_name` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `email`, `full_name`, `image`) VALUES
(1, 'admin', '579b1bdcf431e28914c7e2662be33ba0', NULL, NULL, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
