-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2022-01-30 17:43:41
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
-- 表的结构 `re_mail`
--

CREATE TABLE `re_mail` (
  `mail_id` int(11) NOT NULL,
  `mail` text NOT NULL,
  `code` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `re_mail`
--

INSERT INTO `re_mail` (`mail_id`, `mail`, `code`) VALUES
(1, '123456', 789456),
(3, '123456', 555555),
(4, '1806316091@qq.com', 669007),
(5, '44444@qq.com', 273884),
(6, 'efwgrbetb@qq.com', 397084),
(7, 'seimo@sakura-bbs.cn', 425715),
(8, 'shijiesansha@qq.com', 689373);

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
(1, 'guangnian', '123456', '1806316091@qq.com', '316768', 1, 1, 1, 1, 1, 1, '8e34a35bce42d9d050a224694154c1d9', '::1'),
(2, 'shijiesansha', '12345678', 'shijiesansha@qq.com', '689373', 1, 1, 0, 0, 0, 0, '41f37e88ef6f3191c99c869971196481', '39.188.202.254');

--
-- 转储表的索引
--

--
-- 表的索引 `re_mail`
--
ALTER TABLE `re_mail`
  ADD PRIMARY KEY (`mail_id`);

--
-- 表的索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `re_mail`
--
ALTER TABLE `re_mail`
  MODIFY `mail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
