-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Час створення: Лют 03 2022 р., 15:00
-- Версія сервера: 8.0.24
-- Версія PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `нафтоавтоматика`
--

-- --------------------------------------------------------

--
-- Структура таблиці `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `Name` text NOT NULL,
  `Description` text NOT NULL,
  `Photo` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп даних таблиці `category`
--

INSERT INTO `category` (`id`, `Name`, `Description`, `Photo`) VALUES
(22, 'wefwef', 'wefweferger5t rt 35e5t54t y5y 5446 44 6w4 646grhrhrhr', 23),
(25, 'rgewg', 'wregwrgerge et hgweth eth trwh tht h trhrtht tw wter herth wethwrt', 21);

-- --------------------------------------------------------

--
-- Структура таблиці `photos`
--

CREATE TABLE `photos` (
  `id` int NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп даних таблиці `photos`
--

INSERT INTO `photos` (`id`, `photo`) VALUES
(1, 'Example'),
(2, 'Untitled Diagram.drawio.png'),
(3, 'Untitled Diagram.drawio.png'),
(4, 'nafto-main-logo (1).png'),
(5, 'nafto-main-logo (1).png'),
(6, 'nafto-main-logo.png'),
(7, 'volta-zero-980x654.jpg'),
(8, 'Untitled Diagram.drawio.png'),
(9, 'Untitled Diagram.drawio.png'),
(10, 'volta-zero-980x654.jpg'),
(11, 'Untitled Diagram.drawio.png'),
(12, ''),
(13, 'nafta-bulo-stalo-navantazhuvach-1080x675.jpg'),
(14, 'volta-zero-980x654.jpg'),
(15, 'nafto-main-logo (1).png'),
(16, 'nafta-maz-electro.jpg'),
(17, ''),
(18, 'volta-zero-980x654.jpg'),
(19, 'nafto-main-logo (1).png'),
(20, 'Untitled Diagram.drawio.png'),
(21, 'vahtovka.png'),
(22, 'avtomaysterni-1.png'),
(23, 'block-container.png'),
(24, 'viyskovi.png'),
(25, 'viyskovi.png'),
(26, 'vahtovka.png'),
(27, 'avtospecpriznachennya.png'),
(28, 'avtomaysterni-1.png'),
(29, ''),
(30, ''),
(31, ''),
(32, 'block-container.png'),
(33, 'avtospecpriznachennya.png'),
(34, 'avtomaysterni-1.png'),
(35, ''),
(36, 'avtospecpriznachennya.png'),
(37, 'b065afbe-ac1f-425d-84f3-bf09d28619ff.jpg'),
(38, 'b065afbe-ac1f-425d-84f3-bf09d28619ff.jpg'),
(39, 'avtobus.jpg'),
(40, 'avtobus.jpg'),
(41, 'kuzova.jpg'),
(42, ''),
(43, ''),
(44, 'kuzova.jpg'),
(45, '10.jpg'),
(46, '4-kopyya.jpg'),
(47, '3.jpg'),
(48, 'b065afbe-ac1f-425d-84f3-bf09d28619ff (1).jpg');

-- --------------------------------------------------------

--
-- Структура таблиці `service`
--

CREATE TABLE `service` (
  `id` int NOT NULL,
  `Name` text NOT NULL,
  `Description` text NOT NULL,
  `Photo` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп даних таблиці `service`
--

INSERT INTO `service` (`id`, `Name`, `Description`, `Photo`) VALUES
(3, 'РЕМОНТ АВТОБУСІВ', 'Громадський транспорт – це величезна відповідальність перед великою кількістю пасажирів, які щодня ним користуються. Автобуси досить часто страждають від перезавантаження, а тому кількість поломок у даного виду транспорту значно вища, ніж у легкових машин. Наш сервісний центр готовий надати послуги по зварюванню та фарбуванню кузова автобуса, виконати повну діагностику, а також зайнятись ремонтними роботами всередині салону та ще багато інших видів робіт.', 39),
(4, 'РЕМОНТ КУЗОВІВ-ФУРГОНІВ', 'Даний вид послуги найчастіше включає в себе усунення механічних дефектів, наприклад, подряпин, проломів чи сколів на кузові. У нас є вся необхідна база інструментів та обладнання, яка дозволить виконати всі види ремонту точно в заданий термін. Легко замінимо фурнітуру, зробимо додаткове утеплення, зробимо демонтаж дверей або інші види робіт по вашому бажанню.', 41),
(6, 'РЕМОНТ КУЗОВІВ-ФУРГОНІВ', 'Даний вид послуги найчастіше включає в себе усунення механічних дефектів, наприклад, подряпин, проломів чи сколів на кузові. У нас є вся необхідна база інструментів та обладнання, яка дозволить виконати всі види ремонту точно в заданий термін. Легко замінимо фурнітуру, зробимо додаткове утеплення, зробимо демонтаж дверей або інші види робіт по вашому бажанню.', 48);

-- --------------------------------------------------------

--
-- Структура таблиці `vehicle`
--

CREATE TABLE `vehicle` (
  `id` int NOT NULL,
  `Name` text NOT NULL,
  `Purpose` text NOT NULL,
  `Description` text NOT NULL,
  `IdPhoto` int NOT NULL,
  `IdCategory` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп даних таблиці `vehicle`
--

INSERT INTO `vehicle` (`id`, `Name`, `Purpose`, `Description`, `IdPhoto`, `IdCategory`) VALUES
(2, 'wrgw', 'wegwef', 'werfwefwer', 41, 22),
(3, 'Автомайстерня ФПВ-16406 на базі шасі КРАЗ-65053', 'Для перевезення робочих бригад, обладнання та інструменту', ' Повне найменування:	СПЕЦІАЛІЗОВАНИЙ АВТОМОБІЛЬ ФПВ-16406 (АВТОМАЙСТЕРНЯ) НА БАЗІ ШАСІ КРАЗ-65053 Базове шасі:	КрАЗ-65053 Колісна формула:	6х4 Кількість місць для сидіння (в салоні + в кабіні):	8 (6+2) Розмір кузова-фургона, мм. (ДхШхВ):	6100х2500х2000 Тип кузова-фургона:	Вантажопасажирський Конструкція кузова-фургона:	Каркасно-зварний, посилений з термоізоляцією, зовнішня обшивка з оцинкованого сталевого листа товщиною 1,5 мм. Складається з трьох відсіків: пасажирського, енергетичного та слюсарного. Сидіння:	СПН-1, обшивка зносостійка вінілісшкіра, обладнані двоточковими ременями безпеки Двері:	Пасажирського та енергетичного відсіків, встановлені в правій боковині фургона. Слюсарного відсіку , встановлена в задній стінці кузова-фургона. Вікна:	Автомобільного типу з травмобезпечного скла Система  опалення:	Подвійна: від автономного повітряного обігрівача  8 кВт. та обігрівача, що працює від системи охолодження двигуна з двома радіаторами обігріву 12 кВт. Система кондиціювання:	Автомобільного типу, встановлюється за побажанням замовника Вентиляція:	Природня, через вікна з зсувним склом та аварійно-вентиляційний люк.', 46, 25),
(4, 'Автомайстерня ФПВ-16406 на базі шасі КРАЗ-65053 з краном маніпулятором', 'Для перевезення робочих бригад, обладнання та інструменту', 'Повне найменування:	СПЕЦІАЛІЗОВАНИЙ АВТОМОБІЛЬ ФПВ-16406 (АВТОМАЙСТЕРНЯ) НА БАЗІ ШАСІ КРАЗ-65053 Базове шасі:	КрАЗ-65053 Колісна формула:	6х4 Кількість місць для сидіння (в салоні + в кабіні):	8 (6+2) Розмір кузова-фургона, мм. (ДхШхВ):	5600х2600х2000 Тип кузова-фургона:	Вантажопасажирський Конструкція кузова-фургона:	Каркасно-зварний, посилений з термоізоляцією, зовнішня обшивка з оцинкованого сталевого листа товщиною 1,5 мм. Складається з трьох відсіків: пасажирського, енергетичного та слюсарного. Сидіння:	СПН-1, обшивка зносостійка вінілісшкіра, обладнані двоточковими ременями безпеки Двері:	Пасажирського та енергетичного відсіків, встановлені в правій боковині фургона. Слюсарного відсіку , встановлена в задній стінці кузова-фургона. Вікна:	Автомобільного типу з травмобезпечного скла Система  опалення:	Подвійна: від автономного повітряного обігрівача «Планар-8Д» 8 кВт. та обігрівача, що працює від системи охолодження двигуна з двома радіаторами обігріву 12 кВт. Система кондиціювання:	Автомобільного типу, встановлюється за побажанням замовника Вентиляція:	Природня, через вікна з зсувним склом та аварійно-вентиляційний люк.', 47, 25);

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Photo` (`Photo`);

--
-- Індекси таблиці `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Photo` (`Photo`),
  ADD KEY `Photo_2` (`Photo`),
  ADD KEY `Photo_3` (`Photo`);

--
-- Індекси таблиці `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IdCategory` (`IdCategory`),
  ADD KEY `IdPhoto` (`IdPhoto`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT для таблиці `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT для таблиці `service`
--
ALTER TABLE `service`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблиці `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Обмеження зовнішнього ключа збережених таблиць
--

--
-- Обмеження зовнішнього ключа таблиці `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `category_ibfk_1` FOREIGN KEY (`Photo`) REFERENCES `photos` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Обмеження зовнішнього ключа таблиці `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `service_ibfk_1` FOREIGN KEY (`Photo`) REFERENCES `photos` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Обмеження зовнішнього ключа таблиці `vehicle`
--
ALTER TABLE `vehicle`
  ADD CONSTRAINT `vehicle_ibfk_1` FOREIGN KEY (`IdCategory`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `vehicle_ibfk_2` FOREIGN KEY (`IdPhoto`) REFERENCES `photos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
