-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 2017-05-22 14:15:57
-- 服务器版本： 5.6.35
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `sunshine_oa`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE `admin` (
  `user_id` int(50) NOT NULL,
  `user_name` varchar(20) COLLATE utf8_general_mysql500_ci NOT NULL,
  `pass_word` varchar(300) COLLATE utf8_general_mysql500_ci NOT NULL,
  `real_name` varchar(20) COLLATE utf8_general_mysql500_ci NOT NULL,
  `user_tel` varchar(15) COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`user_id`, `user_name`, `pass_word`, `real_name`, `user_tel`) VALUES
(1, 'xinli_qiantai', '45fd3417d21e5b2f7a2e8a33a9af7f17', '邓仕鑫', '18883991987');

-- --------------------------------------------------------

--
-- 表的结构 `book_register`
--

CREATE TABLE `book_register` (
  `register_id` int(55) NOT NULL,
  `register_name` varchar(15) COLLATE utf8_general_mysql500_ci NOT NULL,
  `register_tel` varchar(15) COLLATE utf8_general_mysql500_ci NOT NULL,
  `detail_time` datetime NOT NULL,
  `remarks` text COLLATE utf8_general_mysql500_ci NOT NULL,
  `register_person` varchar(25) COLLATE utf8_general_mysql500_ci NOT NULL,
  `register_time` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- 转存表中的数据 `book_register`
--

INSERT INTO `book_register` (`register_id`, `register_name`, `register_tel`, `detail_time`, `remarks`, `register_person`, `register_time`) VALUES
(7, '邓仕鑫', '18883991987', '2017-05-22 13:39:00', '情感', '邓仕鑫', '2017-05-22 00:00:00.000000');

-- --------------------------------------------------------

--
-- 表的结构 `navbar`
--

CREATE TABLE `navbar` (
  `nav_id` int(5) NOT NULL,
  `nav_name` varchar(20) COLLATE utf8_general_mysql500_ci NOT NULL,
  `nav_ul` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `nav_login` tinyint(1) DEFAULT NULL,
  `nav_unlogin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- 转存表中的数据 `navbar`
--

INSERT INTO `navbar` (`nav_id`, `nav_name`, `nav_ul`, `nav_login`, `nav_unlogin`) VALUES
(1, '注销', './server/admin_logout.php', 1, NULL),
(2, '管理员登录', './admin_login_panel.php', NULL, 1),
(3, '主页', './index.php', 1, 1),
(4, '预约咨询', './reserve_panel.php', 1, 1),
(5, '预约信息', './admin_panel.php', 1, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `rota`
--

CREATE TABLE `rota` (
  `week` varchar(10) COLLATE utf8_general_mysql500_ci NOT NULL,
  `time` time NOT NULL,
  `teacher_name` varchar(20) COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

-- --------------------------------------------------------

--
-- 表的结构 `teacher`
--

CREATE TABLE `teacher` (
  `teacher_name` varchar(20) COLLATE utf8_general_mysql500_ci NOT NULL,
  `teacher_tel` varchar(15) COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `real_name` (`real_name`),
  ADD UNIQUE KEY `user_tel` (`user_tel`);

--
-- Indexes for table `book_register`
--
ALTER TABLE `book_register`
  ADD PRIMARY KEY (`register_id`);

--
-- Indexes for table `navbar`
--
ALTER TABLE `navbar`
  ADD PRIMARY KEY (`nav_id`,`nav_name`),
  ADD UNIQUE KEY `nav_ul` (`nav_ul`);

--
-- Indexes for table `rota`
--
ALTER TABLE `rota`
  ADD PRIMARY KEY (`week`,`time`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_name`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 使用表AUTO_INCREMENT `book_register`
--
ALTER TABLE `book_register`
  MODIFY `register_id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;