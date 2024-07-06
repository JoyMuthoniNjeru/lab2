-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2024 at 04:15 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voge`
--
CREATE DATABASE IF NOT EXISTS `voge` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `voge`;

-- --------------------------------------------------------

--
-- Table structure for table `community`
--

DROP TABLE IF EXISTS `community`;
CREATE TABLE `community` (
  `communityId` bigint(10) NOT NULL,
  `sender_name` varchar(50) DEFAULT NULL,
  `sender_email` varchar(50) DEFAULT NULL,
  `subject_bday` text DEFAULT NULL,
  `subject_gender` text DEFAULT NULL,
  `text_message` text DEFAULT NULL,
  `datecreated` datetime DEFAULT current_timestamp(),
  `dateupdated` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `genders`
--

DROP TABLE IF EXISTS `genders`;
CREATE TABLE `genders` (
  `genderId` tinyint(1) NOT NULL,
  `gender` varchar(30) DEFAULT NULL,
  `datecreated` datetime DEFAULT current_timestamp(),
  `dateupdated` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `genders`
--

INSERT INTO `genders` (`genderId`, `gender`, `datecreated`, `dateupdated`) VALUES
(1, 'Female', '2024-06-20 12:34:12', '2024-06-20 12:34:12'),
(2, 'Male', '2024-06-20 12:34:12', '2024-06-20 12:34:12'),
(3, 'Non-Binary', '2024-06-20 12:34:12', '2024-06-20 12:34:12'),
(4, 'Rather not say', '2024-06-20 12:34:12', '2024-06-20 12:34:12');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE `messages` (
  `messageId` bigint(10) NOT NULL,
  `sender_name` varchar(50) DEFAULT NULL,
  `sender_email` varchar(50) DEFAULT NULL,
  `subject_line` text DEFAULT NULL,
  `text_message` text DEFAULT NULL,
  `datecreated` datetime DEFAULT current_timestamp(),
  `dateupdated` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `roleId` tinyint(1) NOT NULL,
  `role` varchar(30) DEFAULT NULL,
  `datecreated` datetime DEFAULT current_timestamp(),
  `dateupdated` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`roleId`, `role`, `datecreated`, `dateupdated`) VALUES
(1, 'Admin', '2024-06-20 12:32:59', '2024-06-20 12:32:59'),
(2, 'Student', '2024-06-20 12:32:59', '2024-06-20 12:32:59'),
(3, 'Instructor', '2024-06-20 12:32:59', '2024-06-20 12:32:59'),
(4, 'Author', '2024-06-20 12:32:59', '2024-06-20 12:32:59'),
(5, 'Editor', '2024-06-20 12:32:59', '2024-06-20 12:32:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `userId` bigint(10) NOT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL DEFAULT '',
  `username` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(50) DEFAULT NULL,
  `roleId` tinyint(1) NOT NULL DEFAULT 0,
  `genderId` tinyint(1) NOT NULL DEFAULT 0,
  `datecreated` datetime DEFAULT current_timestamp(),
  `dateupdated` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `community`
--
ALTER TABLE `community`
  ADD PRIMARY KEY (`communityId`);

--
-- Indexes for table `genders`
--
ALTER TABLE `genders`
  ADD PRIMARY KEY (`genderId`),
  ADD UNIQUE KEY `gender` (`gender`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`messageId`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`roleId`),
  ADD UNIQUE KEY `role` (`role`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `community`
--
ALTER TABLE `community`
  MODIFY `communityId` bigint(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genders`
--
ALTER TABLE `genders`
  MODIFY `genderId` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `messageId` bigint(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `roleId` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` bigint(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
