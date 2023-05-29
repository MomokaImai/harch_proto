-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2022-12-03 09:40:00
-- サーバのバージョン： 8.0.25
-- PHP のバージョン: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `harch`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `farmer_list`
--

CREATE TABLE `farmer_list` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `mail` varchar(256) NOT NULL,
  `pass` varchar(256) NOT NULL,
  `plantation` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  `crops` varchar(256) NOT NULL,
  `PR` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `farmer_list`
--

INSERT INTO `farmer_list` (`id`, `name`, `mail`, `pass`, `plantation`, `address`, `crops`, `PR`) VALUES
(1, '田中', 'tanaka@mail.com', 'tanaka', '田中農園', '田中県', 'とうもろこし', 'ようこそ'),
(2, 'g', 'g@g.g', '$2y$10$OoFM4ytNNQHirucvbUsMPOUFnOqI7ZUo7jHfWnQR2WnfqoXnWP0OS', '香西農園', 'kouzaiken', 'tomato', 'yoro'),
(3, 'k', 'k@k.k', '$2y$10$sJ6hbdsdjroQQYwvNjjqhOV/FjUCjqJN3diuD.EXCL9uaPjXMRqL.', 'sss', 'ss', 'corn', 'ss');

-- --------------------------------------------------------

--
-- テーブルの構造 `user_list`
--

CREATE TABLE `user_list` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `mail` varchar(256) NOT NULL,
  `pass` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `user_list`
--

INSERT INTO `user_list` (`id`, `name`, `mail`, `pass`) VALUES
(15, '今井百香', '2104240001im@edu.oca.ac.jp', '$2y$10$otvsSWM/WsNsGBwDwFqTRecZQlYTQk9ZESGbfxFgeiwhxtBwx7kKe'),
(16, 'a', 'a@gmail.com', '$2y$10$pzcS7alcD6JPeVQpAiZN1uGV7wZdS0p97Ae9azdxwGGYpd.4h.Vum'),
(17, 'a', 'a@a.a', '$2y$10$m08n0J9kWmc1oW1sxavsdeuzAXC1H8aQzBt9LUJG9oWutIhp6IWm2'),
(18, 'b', 'd@a.d', '$2y$10$oim3SkYpv8fLh7IzBOY9NORuF7AWZuH.G86SfT9GuXpd9eYZnpa12'),
(19, 'n', 'n@n.n', '$2y$10$BDKoVSybVBv5C.g00lvDwOGtyz6.wG3GWlIJzl565knoCZuWajB8q'),
(20, 'c', 'c@c.c', '$2y$10$NppwaX78YvNWEB5sSw8mZ.SSSCe7/vax/ZdsBcjaK3NMQlo2vefzq'),
(21, 'd@d', 'd@d.d', '$2y$10$AOCGHNJDcKHYwp9EO1nO/ezOa0kVLCp9V4w9vl/EDk3QeZHdQzzGW');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `farmer_list`
--
ALTER TABLE `farmer_list`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `user_list`
--
ALTER TABLE `user_list`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `farmer_list`
--
ALTER TABLE `farmer_list`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- テーブルの AUTO_INCREMENT `user_list`
--
ALTER TABLE `user_list`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
