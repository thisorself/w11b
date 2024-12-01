-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: MySQL-8.2
-- Час створення: Гру 01 2024 р., 04:40
-- Версія сервера: 8.2.0
-- Версія PHP: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `realtor_catalog`
--

-- --------------------------------------------------------

--
-- Структура таблиці `real_estates`
--

CREATE TABLE `real_estates` (
  `id` bigint NOT NULL,
  `address` varchar(256) NOT NULL,
  `property_type` enum('Квартира','Будинок','Комерція','Земля','Гараж') NOT NULL,
  `deal_type` enum('Продаж','Оренда','Суборенда') NOT NULL,
  `area` int NOT NULL,
  `description` longtext NOT NULL,
  `owner_fullname` varchar(128) NOT NULL,
  `owner_telephone` char(15) NOT NULL,
  `owner_email` varchar(64) DEFAULT NULL,
  `price` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп даних таблиці `real_estates`
--

INSERT INTO `real_estates` (`id`, `address`, `property_type`, `deal_type`, `area`, `description`, `owner_fullname`, `owner_telephone`, `owner_email`, `price`) VALUES
(1, 'Україна, м. Херсон, вул. Ушакова 17, кв. 2', 'Квартира', 'Продаж', 36, 'Дешева квартира на першому поверсі, душ з туалетом, кухня, двокімнатна, кладовка, близько до центру.', 'Комарова Наталія Сергіївна', '+380681637467', NULL, 1500000),
(2, 'Україна, Львів, вул. Миколи Бенцаля, 17, кв. 64', 'Квартира', 'Оренда', 40, 'Оренда комфортної квартири для відпочинку або екскурсії по Львову. Душ окремо від туалету, двоспальне ліжко, кондиціонер, електроплита.', 'Карпатов Олег Олегович', '+380126574836', 'lvivthebest@gmail.com', 10000),
(3, 'Україна, Харків, Корсіковський провулок 19', 'Будинок', 'Продаж', 120, 'Двоповерховий будинок з двома ванними кімнатами, великою кухнею та залою та 4 кімнатами загалом. Є кондиціонер, підлога, що обігрівається, і всі зручності. Неподалік центру.', 'Сонячна Олена Вікторівна', '+380432847592', 'sellthehome@ukr.net', 50000000),
(4, 'Україна, Одеса, вул. Платанова 79, кв. 14', 'Квартира', 'Оренда', 30, 'Оренда квартири в Хаджибійському районі. Туалет та ванна загальна, кухня невелика, два односпальні ліжка, є бойлер.', 'Степаненко Василь Андрійович', '+380589273485', 'odesavanlav@gmail.com', 5000),
(5, '\"Україна, Вінниця, площа Костянтина Моглика 24, кв. 75\"', 'Квартира', 'Продаж', 45, '\"Продається квартира. Середня кухня, маленька зала, окремо туалет та ванна кімната, є кондиціонер і бойлер. Одне одномісне ліжко, дві шафи.\"', '\"Мрійко Марина Ігорівна\"', '\"+380358746582\"', NULL, 5000000),
(6, 'WAS REDACTED TWISE', 'Будинок', 'Продаж', 1, '\"456\"', '\"789\"', '001', 'exampl1', 125),
(7, '\"456\"', 'Квартира', 'Оренда', 2, '\"789\"', '\"002\"', '125', 'exampl2', 625);

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `real_estates`
--
ALTER TABLE `real_estates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `address` (`address`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `real_estates`
--
ALTER TABLE `real_estates`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
