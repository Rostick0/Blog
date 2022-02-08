-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 08 2022 г., 17:13
-- Версия сервера: 8.0.24
-- Версия PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `blog_test_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comment`
--

CREATE TABLE `comment` (
  `id_comment` int NOT NULL,
  `post_id` int NOT NULL,
  `author_id` int NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `comment`
--

INSERT INTO `comment` (`id_comment`, `post_id`, `author_id`, `text`) VALUES
(67, 37, 14, 'w345'),
(68, 45, 24, 'Оу');

-- --------------------------------------------------------

--
-- Структура таблицы `post`
--

CREATE TABLE `post` (
  `id_post` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'no-img.png',
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date-update` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int NOT NULL,
  `view` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `post`
--

INSERT INTO `post` (`id_post`, `title`, `text`, `img`, `date`, `date-update`, `user_id`, `view`) VALUES
(30, '2131221', '213122121312212131221213122121312212131221213122121312212131221213122121312212131221213122121312212131221213122121312212131221213122121312212131221213122121312212131221213122121312212131221213122121312212131221213122121312212131221213122121312212131221213122121312212131221213122121312212131221213122121312212131221213122121312212131221213122121312212131221213122121312212131221213122121312212131221213122121312212131221213122121312212131221213122121312212131221213122121312212131221213122121312212131221213122121312212131221213122121312212131221213122121312212131221213122121312212131221213122121312212131221213122121312212131221213122121312212131221213122121312212131221213122121312212131221213122121312212131221213122121312212131221213122121312212131221213122121312212131221213122121312212131221213122121312212131221213122121312212131221213122121312212131221213122121312212131221213122121312212131221213122121312212131221213122121312212131221213122121312212131221213122121312212131221213122121312212131221213122121312212131221213122121312212131221213122121312212131221213122121312212131221', 'no-img.png', '2022-01-07 19:27:18', '2022-01-07 19:27:18', 14, 1),
(37, 'Заходите на сайт КСТА', 'Заходите на сайт КСТАЗаходите на сайт КСТАЗаходите на сайт КСТАЗаходите на сайт КСТАЗаходите на сайт КСТАЗаходите на сайт КСТАЗаходите на сайт КСТАЗаходите на сайт КСТАЗаходите на сайт КСТАЗаходите на сайт КСТАЗаходите на сайт КСТАЗаходите на сайт КСТАЗаходите на сайт КСТАЗаходите на сайт КСТАЗаходите на сайт КСТАЗаходите на сайт КСТАЗаходите на сайт КСТАЗаходите на сайт КСТАЗаходите на сайт КСТАЗаходите на сайт КСТАЗаходите на сайт КСТАЗаходите на сайт КСТАЗаходите на сайт КСТАЗаходите на сайт КСТАЗаходите на сайт КСТАЗаходите на сайт КСТАЗаходите на сайт КСТАЗаходите на сайт КСТА', '245691641573444.png', '2022-01-07 19:37:24', '2022-01-07 19:37:24', 14, 2),
(43, 'Работа с excel', 'Чтобы вывести после первых трех символов в числе какой либо текс, то нужно использовать (###\'ваш текст\')\r\nЧтобы вывести после первых трех символов в числе какой либо текс, то нужно использовать (###\'ваш текст\')\r\nЧтобы вывести после первых трех символов в числе какой либо текс, то нужно использовать (###\'ваш текст\')\r\nЧтобы вывести после первых трех символов в числе какой либо текс, то нужно использовать (###\'ваш текст\')\r\nЧтобы вывести после первых трех символов в числе какой либо текс, то нужно использовать (###\'ваш текст\')\r\nЧтобы вывести после первых трех символов в числе какой либо текс, то нужно использовать (###\'ваш текст\')', '759631641834108.png', '2022-01-10 20:01:48', '2022-01-10 20:01:48', 14, 2),
(44, 'Вред от заводов', 'В наше время природа страдает очень сильно, на этом сыграло множество факторов. Человек благодаря производству наносит прямой удар природе, повышает количество выбросов CO2 в атмосферу\r\nВ наше время природа страдает очень сильно, на этом сыграло множество факторов. Человек благодаря производству наносит прямой удар природе, повышает количество выбросов CO2 в атмосферу\r\nВ наше время природа страдает очень сильно, на этом сыграло множество факторов. Человек благодаря производству наносит прямой удар природе, повышает количество выбросов CO2 в атмосферу\r\nВ наше время природа страдает очень сильно, на этом сыграло множество факторов. Человек благодаря производству наносит прямой удар природе, повышает количество выбросов CO2 в атмосферу\r\nВ наше время природа страдает очень сильно, на этом сыграло множество факторов. Человек благодаря производству наносит прямой удар природе, повышает количество выбросов CO2 в атмосферу\r\nВ наше время природа страдает очень сильно, на этом сыграло множество факторов. Человек благодаря производству наносит прямой удар природе, повышает количество выбросов CO2 в атмосферу', '409291641834327.png', '2022-01-10 20:05:27', '2022-01-10 20:05:27', 14, 1),
(45, 'Засуха', 'Наверное каждый из нас слышал о глобальном потеплении, но никто не задумался насколько остро встала проблема в наше время. Множество факторов сыграли свою роль, выбросы газов CO2, горение леса, извержения вулканов, солнечная активность. Человечество сыграло огромную роль для повышения температуры\r\nНаверное каждый из нас слышал о глобальном потеплении, но никто не задумался насколько остро встала проблема в наше время. Множество факторов сыграли свою роль, выбросы газов CO2, горение леса, извержения вулканов, солнечная активность. Человечество сыграло огромную роль для повышения температуры\r\nНаверное каждый из нас слышал о глобальном потеплении, но никто не задумался насколько остро встала проблема в наше время. Множество факторов сыграли свою роль, выбросы газов CO2, горение леса, извержения вулканов, солнечная активность. Человечество сыграло огромную роль для повышения температуры', '838561643196665.png', '2022-01-10 20:08:20', '2022-01-26 15:18:40', 14, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `cookie` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'no-avatar.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id_user`, `login`, `password`, `email`, `cookie`, `avatar`) VALUES
(1, 'user', '1', NULL, '[value-5]', 'no-avatar.png'),
(2, 'login', 'password', NULL, NULL, 'no-avatar.png'),
(3, 'login', 'password', NULL, NULL, 'no-avatar.png'),
(7, 'user1', '123', 'ru@mail.ru', NULL, 'no-avatar.png'),
(14, '1234567890', '$2y$10$sgj7Hhncl0tPvghHoioIM.lPgLhB0cQ00vsH9Mkx46jvXrniVbMe2', 'rostik057@gmail.com', 'f0bb449f66e1c23df4fdea36cf6ff932', '67421643906862.png'),
(19, '+7(952)0481728', '$2y$10$gIKmsfUxR.KBnVzjoAEIjO.k7wVjx4/J3qDOV6y5XvJ6oloR3BqAi', '', '26095007', 'no-avatar.png'),
(23, 'Work', '$2y$10$eEhzhLX8fKRXphU/aBR84e2m62ouG6ASHayQ6i4BM5bRd.6qZwGUq', '', '73682010', 'no-avatar.png'),
(24, '12341241', '$2y$10$JN06ovaKfxUZO7QBXWepZuE7mGCxapCsfoE91J5Za2ZHzk1D/gbti', '', 'd014140de21720e69399d1fb91b16e2f', 'no-avatar.png'),
(26, '', '$2y$10$Zmd6ZVILP6tDPuRWEk7wWuHWuAdhjCyoZ5GlWB/kHfP0zEFQXl2SG', '', 'ff15883ae6bcb6fb27c8d7fc83bc6f33', 'no-avatar.png'),
(28, '', '$2y$10$m/lis1v8j1DShibz49VgU.ypHUH6zwW5A5WcCi0NzuRaBpDH4ZMBe', '', 'ff15883ae6bcb6fb27c8d7fc83bc6f33', 'no-avatar.png'),
(29, '', '$2y$10$8jeLNwmajo3QpdqYTXn6OOLtBEbJOFlSGz8cebZIZdsQj1LEsYaoi', '', 'ff15883ae6bcb6fb27c8d7fc83bc6f33', 'no-avatar.png'),
(30, '', '$2y$10$mohwB5SuSdkbnoDYy4KTyeGmaCVzbePenqRF.cNTJDerhZQ7358wa', '', 'ff15883ae6bcb6fb27c8d7fc83bc6f33', 'no-avatar.png'),
(31, '', '$2y$10$wEB0QfCn6VTzpgj7l7RnTOMOwS25TKpXviMkaUkFBVrBjUs3Ec6F2', '', 'ff15883ae6bcb6fb27c8d7fc83bc6f33', 'no-avatar.png'),
(32, '', '$2y$10$R7yhKRonOPs8MAq3PtIot.81VQhjb/LA8HbtRfbswLEPKsKXwk67G', '', 'ff15883ae6bcb6fb27c8d7fc83bc6f33', 'no-avatar.png'),
(33, 'testtest', '$2y$10$YhCEmDYkKJSwKFV9AM.U0OvM15sHrsR.WOgWBe3lkSfTqyoWE/vgq', 'rostik057@gmail.com', '450ba2362e92a92de18bb13021471282', 'no-avatar.png'),
(34, 'testtest3', '$2y$10$Z4auPqgm6BtDW7HituUJp.6iW6HCNMuxUJU5DdgYhdhvEPMhZwuum', 'rostik057@gmail.com', '8bbfcb2563b3063f76411669cdb58cc6', 'no-avatar.png'),
(35, '', '$2y$10$OPCFi4KCliLy4LBtLbI6IOaCKu89KL8REZkW/0W0BFPKDUBX40izy', '', 'ff15883ae6bcb6fb27c8d7fc83bc6f33', 'no-avatar.png'),
(36, 'rostik057312', '$2y$10$4QysY0npWZdIfzWn6HtJYeEEqNajvsDVYDMIcEg00YZj8ecgmaVl.', 'rostik057@gmail.com', 'f863993f40664dcb8d1a5338a1978e0a', 'no-avatar.png'),
(37, 'zacxda', '$2y$10$AUrpQ5snfyQ6DRHZAirHPOFiTB0pB4fh6wjBXdPe8WDGDfEbzVxby', 'rostik057@gmail.com', NULL, 'no-avatar.png'),
(38, 'testtest3321', '$2y$10$W0Pv/O/DyR75IZ9T5P1caevOWtGXKsbF957jdYxETcuUAtdf.9pLe', 'rostik057@gmail.com', NULL, 'no-avatar.png'),
(39, 'woman_tal321', '$2y$10$vAnO97tj6gLk/Uk14pEyk.6HrNk.0x9wd9r1RlcoitC.bU2bLp6fy', 'rostik057@gmail.com', NULL, 'no-avatar.png'),
(40, '324567675432', '$2y$10$/SWMjmtGfLSZewdnm.UKiOJz90ycJYaOzwbwtfwxG1wdHjEM4mO7u', 'rostik057@gmail.com', NULL, 'no-avatar.png'),
(41, 'testtest321321', '$2y$10$z9ccD4OgluTAFCAbOihTUu6vE.sT8ATvn0NiFxSzxmZ3oRaa2bVr2', 'rostik057@gmail.com', NULL, 'no-avatar.png'),
(42, 'russian', '$2y$10$ABCJXqnPTJOJHV1bOYf0NeAPdxCnGfCcmzq3fN2XJMLWzY8E4F2UC', 'rostik057@gmail.com', '0e1270429b13379a5cccf64cee11a266', 'no-avatar.png');

-- --------------------------------------------------------

--
-- Структура таблицы `user-info`
--

CREATE TABLE `user-info` (
  `user_id` int NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `date_registration` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_online` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `user-info`
--

INSERT INTO `user-info` (`user_id`, `description`, `date_registration`, `last_online`) VALUES
(1, NULL, '2022-01-15 01:41:21', '2022-01-15 01:41:21'),
(2, NULL, '2022-01-15 01:41:35', '2022-01-15 01:41:35'),
(3, NULL, '2022-01-15 01:41:41', '2022-01-15 01:41:41'),
(7, NULL, '2022-01-15 01:42:12', '2022-01-15 01:42:12'),
(14, 'Ура, я поменял статус!', '2022-01-15 01:44:35', '2022-02-08 17:12:26'),
(19, NULL, '2022-01-15 01:45:40', '2022-01-15 01:45:40'),
(23, NULL, '2022-01-15 01:47:18', '2022-01-15 01:47:18'),
(24, NULL, '2022-01-15 01:47:18', '2022-01-15 01:47:18'),
(25, NULL, '2022-01-20 12:10:27', '2022-01-20 12:10:27'),
(26, NULL, '2022-01-20 12:12:31', '2022-01-20 12:12:31'),
(27, NULL, '2022-01-20 12:13:15', '2022-01-20 12:13:15'),
(28, NULL, '2022-01-20 12:22:08', '2022-01-20 12:22:08'),
(29, NULL, '2022-01-20 12:26:22', '2022-01-20 12:26:22'),
(30, NULL, '2022-01-20 12:27:24', '2022-01-20 12:27:24'),
(31, NULL, '2022-01-20 12:31:21', '2022-01-20 12:31:21'),
(32, NULL, '2022-01-20 12:33:00', '2022-01-20 12:33:00'),
(33, NULL, '2022-01-20 12:35:27', '2022-02-02 23:06:39'),
(34, NULL, '2022-01-20 12:36:46', '2022-01-26 10:33:22'),
(35, NULL, '2022-01-20 13:16:04', '2022-01-20 13:16:04'),
(36, NULL, '2022-01-20 13:25:12', '2022-01-20 13:25:12'),
(37, NULL, '2022-01-20 13:36:07', '2022-01-20 13:36:07'),
(38, NULL, '2022-01-20 13:38:03', '2022-01-20 13:38:03'),
(39, NULL, '2022-01-20 13:43:27', '2022-01-20 13:43:27'),
(40, NULL, '2022-01-21 19:03:29', '2022-01-21 19:03:29'),
(41, NULL, '2022-01-22 17:55:27', '2022-01-22 17:55:27'),
(42, NULL, '2022-01-26 18:11:39', '2022-01-26 18:12:06');

-- --------------------------------------------------------

--
-- Структура таблицы `view`
--

CREATE TABLE `view` (
  `id_view` bigint NOT NULL,
  `post_id` int NOT NULL,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `view`
--

INSERT INTO `view` (`id_view`, `post_id`, `user_id`) VALUES
(16, 37, 14),
(18, 37, 23),
(24, 32, 14),
(26, 30, 14),
(27, 28, 14),
(28, 44, 14),
(29, 43, 14),
(30, 45, 14),
(31, 0, 14),
(32, 45, 24),
(33, 43, 33),
(34, 45, 34),
(36, 29, 14),
(38, 45, 42),
(40, 41, 14),
(41, 33, 14),
(42, 31, 14),
(43, 27, 14),
(44, 35, 14);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `author_id` (`author_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Индексы таблицы `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Индексы таблицы `user-info`
--
ALTER TABLE `user-info`
  ADD PRIMARY KEY (`user_id`);

--
-- Индексы таблицы `view`
--
ALTER TABLE `view`
  ADD PRIMARY KEY (`id_view`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT для таблицы `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT для таблицы `user-info`
--
ALTER TABLE `user-info`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT для таблицы `view`
--
ALTER TABLE `view`
  MODIFY `id_view` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
