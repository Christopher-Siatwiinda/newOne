-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2024 at 10:44 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `castletestdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(10) NOT NULL,
  `user-type` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fullname`, `email`, `password`, `user-type`) VALUES
(1, 'Kaluba Chakanga', 'kalubachakanga@gmail.com', 'castle1234', 'office-admin'),
(2, 'Henry Avlon', 'henry@gmail.com', 'castle1234', 'system-admin');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `choices` varchar(1) NOT NULL,
  `content` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `choices`, `content`) VALUES
(1, 'a', 'not started'),
(2, 'b', 'question asked'),
(3, 'c', 'question paused'),
(4, 'd', 'question finished');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` mediumtext NOT NULL,
  `questionType` varchar(2) NOT NULL,
  `answers` varchar(256) NOT NULL,
  `rightAnswer` varchar(10) NOT NULL,
  `allowedAttempts` varchar(2) NOT NULL,
  `allowedTime` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `questionType`, `answers`, `rightAnswer`, `allowedAttempts`, `allowedTime`) VALUES
(15, 'Who is the president of Zambia?', '2', '[\"Mwanawasa\",\"Chiluba\",\"Hakainde\",\"Sata\"]', 'Hakainde', '1', '1'),
(19, 'What\'s your favorite meal?', '2', '[\"Nshima\",\"Rice\",\"Potatoes\"]', 'Nshima', '1', '2'),
(20, 'What is your favorite color?', '2', '[\"Blue\",\"Green\",\"Navy Blue\"]', 'Navy Blue', '1', '2');

-- --------------------------------------------------------

--
-- Table structure for table `questionsasked`
--

CREATE TABLE `questionsasked` (
  `id` int(11) NOT NULL,
  `msisdn` varchar(12) NOT NULL,
  `questionId` int(11) NOT NULL,
  `user_answer` varchar(20) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questionsasked`
--

INSERT INTO `questionsasked` (`id`, `msisdn`, `questionId`, `user_answer`, `datetime`) VALUES
(219, '260973232553', 19, '3', '2024-03-07 09:12:48'),
(220, '260973232553', 18, '5', '2024-03-07 09:12:57'),
(221, '260973232553', 15, '2', '2024-03-07 09:13:03'),
(222, '260973232553', 15, '111', '2024-03-07 11:55:19'),
(223, '260973232558', 15, '4', '2024-03-07 11:55:56'),
(224, '260973232558', 19, '2', '2024-03-07 11:56:10'),
(225, '260973232558', 18, '3', '2024-03-07 11:56:18'),
(226, '260973232558', 18, '1111', '2024-03-07 11:56:48'),
(227, '260973232559', 15, '2', '2024-03-07 11:57:57'),
(228, '260973232559', 18, '3', '2024-03-07 11:58:05'),
(229, '260973232559', 19, '4', '2024-03-07 11:58:12');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `id` int(11) NOT NULL,
  `msisdn` bigint(20) NOT NULL,
  `sessionID` varchar(20) NOT NULL,
  `text` mediumtext NOT NULL,
  `timedate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`id`, `msisdn`, `sessionID`, `text`, `timedate`) VALUES
(34, 260973232558, '65e9ab804280c', '1', '2024-03-07 13:56:48'),
(35, 260973232559, '65e9ab99284b6', '4', '2024-03-07 13:57:13');

-- --------------------------------------------------------

--
-- Table structure for table `user_history`
--

CREATE TABLE `user_history` (
  `id` int(11) NOT NULL,
  `msisdn` bigint(20) NOT NULL,
  `quizStartTime` varchar(30) NOT NULL,
  `questionTime` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL,
  `current_question_id` varchar(11) NOT NULL,
  `text_input` varchar(6) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_history`
--

INSERT INTO `user_history` (`id`, `msisdn`, `quizStartTime`, `questionTime`, `status`, `current_question_id`, `text_input`, `datetime`) VALUES
(65, 260973232553, '', '', 'questions', '15', '1', '2024-03-07 09:12:23'),
(66, 260973232558, '', '', 'questions', '18', '1', '2024-03-07 11:55:40'),
(67, 260973232559, '', '', 'questions', '19', '1', '2024-03-07 11:57:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questionsasked`
--
ALTER TABLE `questionsasked`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questionId` (`questionId`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_history`
--
ALTER TABLE `user_history`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `questionsasked`
--
ALTER TABLE `questionsasked`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=230;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `user_history`
--
ALTER TABLE `user_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
