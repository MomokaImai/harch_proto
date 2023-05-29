-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2022-09-03 10:45:28
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
-- テーブルの構造 `chat_tb`
--

CREATE TABLE `chat_tb` (
  `ban` int NOT NULL,
  `nam` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `mes` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `dat` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- テーブルのデータのダンプ `chat_tb`
--

INSERT INTO `chat_tb` (`ban`, `nam`, `mes`, `dat`) VALUES
(1, 'はるたん', 'あああ', '2022-09-03 14:03:59'),
(2, 'はるたん', 'あつや', '2022-09-03 14:09:11'),
(3, 'あつや', 'はらへった', '2022-09-03 14:17:43'),
(4, 'はるたん', 'aaa', '2022-09-03 14:31:39');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `chat_tb`
--
ALTER TABLE `chat_tb`
  ADD PRIMARY KEY (`ban`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `chat_tb`
--
ALTER TABLE `chat_tb`
  MODIFY `ban` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
