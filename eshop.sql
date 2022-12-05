-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 05 2022 г., 18:30
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `eshop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `courier`
--

CREATE TABLE `courier` (
  `courier_id` int NOT NULL,
  `name` varchar(60) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `e_mail` varchar(319) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `courier`
--

INSERT INTO `courier` (`courier_id`, `name`, `phone_number`, `e_mail`) VALUES
(1, 'Олексій Прядко', '0975678900', 'o.priadko@gmail.com'),
(2, 'Денис Бойко', '0632149089', 'boyko.d@ukr.net');

-- --------------------------------------------------------

--
-- Структура таблицы `customer`
--

CREATE TABLE `customer` (
  `customer_id` int NOT NULL,
  `name` varchar(60) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `e_mail` varchar(319) NOT NULL,
  `address` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `customer`
--

INSERT INTO `customer` (`customer_id`, `name`, `phone_number`, `e_mail`, `address`) VALUES
(2, 'Степан Бандера', '0634561221', 'banderaua@gmail.com', 'м. Київ, вул. Сичових Стрільців 12'),
(6, 'Данило Коваленко', '0979675643', 'abd@gmail.com', 'м. Київ'),
(7, 'Данило Галицький', '0999625445', 'boyko.d@ukr.net', 'ми'),
(8, 'Денис Бойко', '0631409098', 'intel.inc@gmail.com', 'ва'),
(9, 'Олександр', '0971237810', 'galll@gmail.com', 'і');

-- --------------------------------------------------------

--
-- Структура таблицы `order`
--

CREATE TABLE `order` (
  `order_id` int NOT NULL,
  `customer_id` int NOT NULL,
  `product_id` int NOT NULL,
  `courier_id` int NOT NULL,
  `quantity` tinyint UNSIGNED NOT NULL,
  `date_get` date NOT NULL,
  `date_arrive` date NOT NULL,
  `payment_method` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `order`
--

INSERT INTO `order` (`order_id`, `customer_id`, `product_id`, `courier_id`, `quantity`, `date_get`, `date_arrive`, `payment_method`) VALUES
(8, 2, 1, 1, 1, '2022-11-12', '2022-11-13', 'cash'),
(13, 6, 1, 2, 2, '2022-11-03', '2022-11-25', 'cash'),
(14, 6, 3, 1, 1, '2022-11-02', '2022-11-04', 'card'),
(15, 2, 2, 1, 1, '2022-12-02', '2022-12-03', 'cash'),
(16, 7, 1, 1, 1, '2022-12-02', '2022-12-03', 'cash'),
(17, 7, 2, 1, 1, '2022-12-17', '2022-12-24', 'card'),
(18, 6, 2, 2, 2, '2022-12-03', '2022-12-11', 'card'),
(19, 8, 1, 2, 3, '2022-12-09', '2022-12-10', 'card'),
(21, 9, 3, 1, 1, '2022-12-02', '2022-12-03', 'cash');

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `product_id` int NOT NULL,
  `supplier_id` int NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `type` varchar(60) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`product_id`, `supplier_id`, `product_name`, `type`, `price`) VALUES
(1, 1, 'HyperX Alloy FPS PRO', 'keyboard', 1999),
(2, 1, 'HyperX Cloud Alpha', 'headphones', 2599),
(3, 2, 'Samsung Galaxy J1 mini', 'smartphone', 5999),
(4, 3, 'Intel Core i5 9600K', 'CPU', 6499);

-- --------------------------------------------------------

--
-- Структура таблицы `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` int NOT NULL,
  `company_name` varchar(60) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `e_mail` varchar(319) NOT NULL,
  `address` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `company_name`, `phone_number`, `e_mail`, `address`) VALUES
(1, 'Kingston', '0991121222', 'kingston@gmail.com', 'м. Київ, вул. Костянтинівська 75'),
(2, 'Samsung', '0971237810', 'samsung@gmail.com', 'м. Київ, пр. Степана Бандери 11A'),
(3, 'Intel', '0631409098', 'intel.inc@gmail.com', 'м. Київ, пр. Степана Бандери 1\r\n');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `courier`
--
ALTER TABLE `courier`
  ADD UNIQUE KEY `courier_id` (`courier_id`) USING BTREE;

--
-- Индексы таблицы `customer`
--
ALTER TABLE `customer`
  ADD UNIQUE KEY `customer_id` (`customer_id`) USING BTREE;

--
-- Индексы таблицы `order`
--
ALTER TABLE `order`
  ADD UNIQUE KEY `order_id` (`order_id`) USING BTREE,
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `courier_id` (`courier_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD UNIQUE KEY `product_id` (`product_id`,`supplier_id`) USING BTREE,
  ADD KEY `supllier_id` (`supplier_id`) USING BTREE;

--
-- Индексы таблицы `supplier`
--
ALTER TABLE `supplier`
  ADD UNIQUE KEY `supplier_id` (`supplier_id`) USING BTREE;

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `courier`
--
ALTER TABLE `courier`
  MODIFY `courier_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`courier_id`) REFERENCES `courier` (`courier_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `order_ibfk_3` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`supplier_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
