-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2022-01-29 13:26:12
-- 服务器版本： 5.7.34-log
-- PHP 版本： 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `jiemi`
--

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `un` text NOT NULL,
  `pw` text NOT NULL,
  `mail` text NOT NULL,
  `code` text NOT NULL,
  `two` int(1) NOT NULL DEFAULT '0',
  `three` int(1) NOT NULL DEFAULT '0',
  `four` int(1) NOT NULL DEFAULT '0',
  `ftf` int(1) NOT NULL DEFAULT '0',
  `five` int(1) NOT NULL DEFAULT '0',
  `ending` int(1) NOT NULL DEFAULT '0',
  `uuid` text NOT NULL,
  `ip` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`uid`, `un`, `pw`, `mail`, `code`, `two`, `three`, `four`, `ftf`, `five`, `ending`, `uuid`, `ip`) VALUES
(1, 'test', 'test', 'test@test.com', '000000', 0, 0, 0, 0, 0, 0, '', '0'),
(3, 'ASDG', '123', '', '391850', 0, 0, 0, 0, 0, 0, '', '0'),
(4, 'ASDG', '123', '', '391850', 0, 0, 0, 0, 0, 0, '', '0'),
(5, '', '', '', '', 0, 0, 0, 0, 0, 0, '', '0'),
(6, '', 'llk2000410', '2789263103@qq.com', '', 0, 0, 0, 0, 0, 0, '', '0'),
(7, '', '', '', '', 0, 0, 0, 0, 0, 0, '', '0'),
(8, '', '', '', '', 0, 0, 0, 0, 0, 0, '', '0'),
(9, '', '', '', '', 0, 0, 0, 0, 0, 0, '', '0'),
(10, '', '', '', '', 0, 0, 0, 0, 0, 0, '', '0'),
(13, '123', '123', 'test@qq.com', '351490', 0, 0, 0, 0, 0, 0, 'bf58432148b643a8b4c41c3901b81d1b', '0'),
(14, '123', '123', 'test2@qq.com', '351490', 0, 0, 0, 0, 0, 0, '6ba9eaf83b8d35da49c4a18cbeb1c5c6', '0'),
(16, 'guangnian', '123', '1806316091@qq.com', '362112', 0, 0, 0, 0, 0, 0, '8e34a35bce42d9d050a224694154c1d9', '::1');

--
-- 转储表的索引
--

--
-- 表的索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
