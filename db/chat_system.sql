-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2020 at 01:00 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `chatid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `chatroomid` int(11) NOT NULL,
  `message` varchar(200) NOT NULL,
  `chat_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`chatid`, `userid`, `chatroomid`, `message`, `chat_date`) VALUES
(1, 6, 7, 'hello', '2020-04-23 07:32:25'),
(2, 9, 7, 'hi', '2020-04-23 07:33:12'),
(3, 4, 7, 'hello', '2020-04-23 07:56:46'),
(4, 9, 7, 'hello', '2020-04-23 08:12:12'),
(5, 9, 7, 'hi', '2020-04-23 08:12:13'),
(6, 4, 7, 'hello how are you', '2020-04-23 08:12:56');

-- --------------------------------------------------------

--
-- Table structure for table `chatroom`
--

CREATE TABLE `chatroom` (
  `chatroomid` int(11) NOT NULL,
  `chat_name` varchar(60) NOT NULL,
  `date_created` datetime NOT NULL,
  `chat_password` varchar(30) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatroom`
--

INSERT INTO `chatroom` (`chatroomid`, `chat_name`, `date_created`, `chat_password`, `userid`) VALUES
(4, 'UOG-BIC', '2020-04-23 06:39:24', '123', 4),
(5, 'Test1', '2020-04-23 06:39:46', '123', 4),
(6, 'SEGi Admins', '2020-04-23 06:40:06', '123', 4),
(7, 'My Classmates BIC', '2020-04-23 07:23:42', '71353177545077b0c97f8c9075f7fc', 6),
(8, 'testchat', '2020-04-23 07:40:58', 'd41d8cd98f00b204e9800998ecf842', 9),
(10, 'arts', '2020-04-23 07:41:43', 'd41d8cd98f00b204e9800998ecf842', 9),
(11, 'learn PHP', '2020-04-23 07:42:06', 'd41d8cd98f00b204e9800998ecf842', 9),
(12, 'segians', '2020-04-23 07:42:39', 'd41d8cd98f00b204e9800998ecf842', 9);

-- --------------------------------------------------------

--
-- Table structure for table `chat_member`
--

CREATE TABLE `chat_member` (
  `chat_memberid` int(11) NOT NULL,
  `chatroomid` int(11) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_member`
--

INSERT INTO `chat_member` (`chat_memberid`, `chatroomid`, `userid`) VALUES
(4, 4, 4),
(5, 5, 4),
(6, 6, 4),
(7, 6, 5),
(8, 7, 6),
(9, 7, 4),
(10, 7, 9),
(11, 7, 7),
(12, 8, 9),
(14, 10, 9),
(15, 11, 9),
(16, 12, 9),
(17, 5, 5),
(18, 5, 10);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(150) NOT NULL,
  `uname` varchar(60) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `access` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `password`, `uname`, `photo`, `access`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 'Admin', '', 1),
(4, 'rajitha', '202cb962ac59075b964b07152d234b70', 'Rajitha Dilshsn', 'upload/adp2_1587600763.jpg', 1),
(5, 'perera', '202cb962ac59075b964b07152d234b70', 'Perera', '', 2),
(6, 'test', '202cb962ac59075b964b07152d234b70', 'Test', '', 2),
(7, 'test123', '202cb962ac59075b964b07152d234b70', 'test123', '', 2),
(8, 'kanchana', '202cb962ac59075b964b07152d234b70', 'Kanchana', '', 2),
(9, 'chathumini', '202cb962ac59075b964b07152d234b70', 'kalhari', 'upload/adp7_1587600724.jpg', 2),
(10, 'kasu04', '202cb962ac59075b964b07152d234b70', 'Kasundi Nelithya', '', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`chatid`);

--
-- Indexes for table `chatroom`
--
ALTER TABLE `chatroom`
  ADD PRIMARY KEY (`chatroomid`);

--
-- Indexes for table `chat_member`
--
ALTER TABLE `chat_member`
  ADD PRIMARY KEY (`chat_memberid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `chatid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `chatroom`
--
ALTER TABLE `chatroom`
  MODIFY `chatroomid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `chat_member`
--
ALTER TABLE `chat_member`
  MODIFY `chat_memberid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
