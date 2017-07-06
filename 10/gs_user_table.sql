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
-- テーブルの構造 `gs_user_table`
--

CREATE TABLE IF NOT EXISTS `gs_user_table` (
`user_id` int(12) NOT NULL,
  `name` varchar(64) NOT NULL,
  `lid` varchar(128) NOT NULL,
  `lpw` varchar(64) NOT NULL,
  `kanri_flg` int(1) NOT NULL,
  `life_flg` int(1) NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `gs_user_table`
--

INSERT INTO `gs_user_table` (`user_id`, `name`, `lid`, `lpw`, `kanri_flg`, `life_flg`, `indate`) VALUES
(16, 'test1', 'test1', '$2y$10$VGQsae50NhFuGSHXqIPQW.3ndX.gtFnf7LPXss/G569NKQamwvBE.', 0, 0, '0000-00-00 00:00:00'),
(17, 'hoge1', 'hoge1', '$2y$10$8JHGEK4h/vD6SHr7yiKwjewLxojWcI8zbsvUu7tF1N.B2tSACm9EW', 0, 0, '0000-00-00 00:00:00'),
(18, 'bar1', 'bar1', '$2y$10$R9sKL9uL1h23stQzkNnPLuYOluj75Y.xdE8yGRNw7ec2InD74VxRC', 0, 0, '0000-00-00 00:00:00'),
(19, 'var1', 'var1', '$2y$10$NixrSYiumWGfr7X3dHrxWu33GniXyFBqCEhqSWLI5pVCmgXUmqe4a', 0, 0, '0000-00-00 00:00:00'),
(20, 'gs', 'gs', '$2y$10$MPERpH8.vQZ2UU2GHT.IluXPNjBMTPzwrzey49g6LinzYKT1Tk9CG', 0, 0, '0000-00-00 00:00:00'),
(21, 'test', 'test', 'test', 0, 0, '0000-00-00 00:00:00'),
(22, 'admin', 'admin', 'admin', 1, 0, '0000-00-00 00:00:00'),
(23, 'test', 'test', '$2y$10$iMzs.TQRkGjTKyxfkfiG5OA.qDeCOev3nCrBAOQODnF3V59QA2pl6', 0, 0, '0000-00-00 00:00:00'),
(24, 'test', 'test', '$2y$10$hDKv/.VA8d2hWTr25RdXWeBzxh28BLEPUA7dveQWX.PO3DoT6Por.', 0, 0, '0000-00-00 00:00:00'),
(25, 'kuso', 'kuso', '$2y$10$E7MoLbQZJiWcP/xAfF3BLez1DvemrIGnDwT8p4vjHXm3r6fY0weUW', 0, 0, '0000-00-00 00:00:00'),
(26, 'kuso', 'kuso', '$2y$10$8/gyoeVm2kNITQRfK4PHf.pq5b5cl4wLqbI.FeKZZIQMrlBrARXoO', 0, 0, '0000-00-00 00:00:00'),
(27, 'pass', 'pass', '$2y$10$vfZsgaLYb4BwAC.dzR417uAvdsn2Zv4ujndjy/K30heMz23QlFACG', 0, 0, '0000-00-00 00:00:00'),
(28, 'oo', 'oo', '$2y$10$.b/ucM/8qQ4MTz5Qh4fFH.Uqpr40SlZm1ie.c6BAS4ghb.IS.6gP.', 0, 0, '0000-00-00 00:00:00'),
(29, 'w', 'w', '$2y$10$41I3gDqVHpsmGOU/Hcej/O1T3yvlqNuOnjHcRFRBhbAjrQamA4ev6', 0, 0, '0000-00-00 00:00:00'),
(30, 'yu', 'yu', '$2y$10$qIVaCvW72s4kQreDkUSVr.VJAsowuiU739ZYhjoF12aODQpyXtrGe', 0, 0, '0000-00-00 00:00:00'),
(31, 'm', 'm', '$2y$10$RScvIg79Zy.CIeVYlIS/0ewIb5jU5gEvscAGcCpYqo7vkr2rZOXZ.', 0, 0, '0000-00-00 00:00:00'),
(32, 't', 't', '$2y$10$x4eZznLxbXmbzkfXyYk12.trQAp0WLkAmDhui3LnYMUBxW.ZtmbYK', 0, 0, '0000-00-00 00:00:00'),
(33, 'r', 'r', '$2y$10$6dpZDZR8KXjuqTxSUbGdruWHFEcx6SzBjT2i3kcI477tRqfbNjs/y', 0, 0, '0000-00-00 00:00:00'),
(34, 'gg', 'gg', '$2y$10$OSmpVIr7Lf7/eKGzr/3Nz.nBf6ig24mVbSWYB7NtUYjGJ0eQMdgGW', 0, 0, '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_user_table`
--
ALTER TABLE `gs_user_table`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_user_table`
--
ALTER TABLE `gs_user_table`
MODIFY `user_id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
