-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 23, 2022 at 01:15 AM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jumblr`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblposts`
--

DROP TABLE IF EXISTS `tblposts`;
CREATE TABLE IF NOT EXISTS `tblposts` (
  `postID` int NOT NULL AUTO_INCREMENT,
  `userID` int DEFAULT NULL,
  `postTitle` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `postImg` text,
  `comment` text,
  PRIMARY KEY (`postID`),
  KEY `userID` (`userID`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tblposts`
--

INSERT INTO `tblposts` (`postID`, `userID`, `postTitle`, `postImg`, `comment`) VALUES
(20, 24, 'dont delete', 'uploads/michael-sum-LEpfefQf4rU-unsplash.jpg', 'please dont delete'),
(25, 24, 'benis', 'uploads/kellen-riggin-QW8e2J7SmRI-unsplash.jpg', 'i dont know what this is'),
(22, 27, 'aprils post', 'uploads/mailchimp-Hv9CS6KZayQ-unsplash.jpg', 'lugungi'),
(23, 24, 'liams third post', 'uploads/marcel-strauss-V-pSsJdyHs4-unsplash.jpg', 'concert!!'),
(24, 30, 'hi im tim!', 'uploads/marcel-strauss-V-pSsJdyHs4-unsplash.jpg', 'this is a cool photo i took! (actually its from unsplash, dont tell anyone)'),
(26, 24, 'why didnt it work', 'uploads/kellen-riggin-QW8e2J7SmRI-unsplash.jpg', 'WORK!!!');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

DROP TABLE IF EXISTS `tblusers`;
CREATE TABLE IF NOT EXISTS `tblusers` (
  `userID` int NOT NULL AUTO_INCREMENT,
  `username` text,
  `userEmail` text,
  `userIcon` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `userPwd` text,
  PRIMARY KEY (`userID`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`userID`, `username`, `userEmail`, `userIcon`, `userPwd`) VALUES
(24, 'liam', 'liam@liam.com', 'icons/Cat.jpg', '$2y$10$4hb0bwLHP7I6vXyrlUa5OOnxKX/eIJmStSCUks1qkf1r8tSmH8UE6'),
(25, 'john', 'john@john.com', 'icons/Dog.jpg', '$2y$10$.QLfqzjUgBr0RKEILNpOgOHmLdDMOBRpgnCHZK4bO.43Jy2zGHYU.'),
(26, 'williamtimbleton', 'will@will.com', 'icons/Home.jpg', '$2y$10$IvOJkA2md4u.zmBp5QoAtOFlrjSdUaV2KmwJIPaOGOUxtTrWLoQ5y'),
(27, 'April', 'april@april.com', 'icons/tom.jpg', '$2y$10$zR6tq29OyuOFbZkKmH8oq.7Fm2oo7NfcdfQk..HDFNEf2b266RIA.'),
(30, 'tim', 'tim@tim.com', 'icons/michael-sum-LEpfefQf4rU-unsplash.jpg', '$2y$10$eLVPY/S0sNMJZET7slpHDuSJdXv8nh13OV1uKZfvYl/46Xk35xdzu');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
