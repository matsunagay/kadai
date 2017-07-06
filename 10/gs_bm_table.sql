-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017 年 7 朁E06 日 17:55
-- サーバのバージョン： 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gs_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_bm_table`
--

CREATE TABLE IF NOT EXISTS `gs_bm_table` (
`book_id` int(12) NOT NULL,
  `user_id` int(12) NOT NULL,
  `bookname` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `bookURL` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `comment` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `gs_bm_table`
--

INSERT INTO `gs_bm_table` (`book_id`, `user_id`, `bookname`, `bookURL`, `comment`, `indate`) VALUES
(4, 0, 'test4', 'testURL4', 'coment4', '2017-06-07 18:07:05'),
(5, 0, 'test5', 'testurl5', 'coment5', '2017-06-07 18:38:21'),
(6, 0, 'test6', 'url6', 'cine6', '2017-06-07 18:41:29'),
(7, 0, 'test7', 'url7', 'come7', '2017-06-07 18:48:30'),
(10, 0, 'testname', 'testURL', 'testcoment', '2017-06-13 00:07:46'),
(11, 0, 'test', 'test', 'test', '2017-06-20 22:20:48'),
(12, 0, 'test', 'test', 'test', '2017-06-22 01:16:12'),
(13, 0, '5', '5', '5', '2017-06-22 19:02:00'),
(14, 0, 'test', 'test', 'test', '2017-06-22 19:08:15'),
(17, 34, 'ppp', 'ppp', 'ppp', '2017-06-22 22:51:20'),
(18, 34, 'テスト', 'テスト', 'テスト', '2017-07-06 21:59:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
 ADD PRIMARY KEY (`book_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
MODIFY `book_id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
