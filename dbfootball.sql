-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 14, 2022 at 08:29 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbfootball`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

DROP TABLE IF EXISTS `tbladmin`;
CREATE TABLE IF NOT EXISTS `tbladmin` (
  `name` varchar(20) NOT NULL COMMENT 'Admin Name',
  `phone` int(8) NOT NULL COMMENT 'Phone Number',
  `email` varchar(30) NOT NULL COMMENT 'Email/User ID',
  `pass` varchar(15) NOT NULL COMMENT 'Password',
  `s_q` varchar(30) NOT NULL COMMENT 'Security Question',
  `s_ans` varchar(30) NOT NULL COMMENT 'Security Answer',
  PRIMARY KEY (`phone`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`name`, `phone`, `email`, `pass`, `s_q`, `s_ans`) VALUES
('admin', 99999999, 'admin@gmail.com', 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tblowner`
--

DROP TABLE IF EXISTS `tblowner`;
CREATE TABLE IF NOT EXISTS `tblowner` (
  `oid` int(4) NOT NULL AUTO_INCREMENT COMMENT 'Owner ID',
  `name` varchar(20) NOT NULL COMMENT 'Owner Name',
  `phone` int(8) NOT NULL COMMENT 'Phone Number',
  `email` varchar(30) NOT NULL COMMENT 'Email/User ID',
  `pass` varchar(15) NOT NULL COMMENT 'Password',
  `s_q` varchar(30) NOT NULL COMMENT 'Security Question',
  `s_ans` varchar(30) NOT NULL COMMENT 'Security Answer',
  PRIMARY KEY (`oid`),
  UNIQUE KEY `phone` (`phone`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblowner`
--

INSERT INTO `tblowner` (`oid`, `name`, `phone`, `email`, `pass`, `s_q`, `s_ans`) VALUES
(12, 'kan', 94572135, 'kan@gmail.com', '123', 'In what city were you born?', 'mascat'),
(10, 'Gregory Danguilan', 98806392, 'greg@aaa.com', '12', 'What was your favorite food?', 'chicken adobo'),
(11, 'Yousuf', 95400611, 'yousuf@gmail.com', '123456', 'In what city were you born?', 'sohar');

-- --------------------------------------------------------

--
-- Table structure for table `tblplayer`
--

DROP TABLE IF EXISTS `tblplayer`;
CREATE TABLE IF NOT EXISTS `tblplayer` (
  `pid` int(4) NOT NULL AUTO_INCREMENT COMMENT 'Player ID',
  `name` varchar(20) NOT NULL COMMENT 'Player Name',
  `phone` int(8) NOT NULL COMMENT 'Phone Number',
  `email` varchar(30) NOT NULL COMMENT 'Email/User ID',
  `pass` varchar(15) NOT NULL COMMENT 'Password',
  `s_q` varchar(30) NOT NULL COMMENT 'Security Question',
  `s_ans` varchar(30) NOT NULL COMMENT 'Security Answer',
  PRIMARY KEY (`pid`),
  UNIQUE KEY `phone` (`phone`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblplayer`
--

INSERT INTO `tblplayer` (`pid`, `name`, `phone`, `email`, `pass`, `s_q`, `s_ans`) VALUES
(1, 'player1', 77777777, 'player1@gmail.com', 'player', 'player1', 'player1'),
(5, 'ziyad', 98833642, 'ze98zo@gmail.com', 'ziyad', 'In what city were you born?', 'ziyad'),
(4, 'ply', 74445555, 'ply@ply.com', '123', 'What was your favorite food?', 'ply'),
(6, 'yousuf', 95400611, 'yousuf@gmail.com', '123', 'In what city were you born?', 'sohar'),
(7, 'raj', 92345678, 'abc@gmail.com', 'abc123', 'In what city were you born?', 'mascat');

-- --------------------------------------------------------

--
-- Table structure for table `tblplayground`
--

DROP TABLE IF EXISTS `tblplayground`;
CREATE TABLE IF NOT EXISTS `tblplayground` (
  `plno` int(4) NOT NULL AUTO_INCREMENT COMMENT 'Playground Number',
  `name` varchar(20) NOT NULL COMMENT 'playground Name',
  `phone` int(8) NOT NULL COMMENT 'Phone Number',
  `price` double(7,3) NOT NULL COMMENT 'Price',
  `location` varchar(30) NOT NULL COMMENT 'Playground Location',
  `oid` int(4) NOT NULL COMMENT 'Owner ID',
  PRIMARY KEY (`plno`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblplayground`
--

INSERT INTO `tblplayground` (`plno`, `name`, `phone`, `price`, `location`, `oid`) VALUES
(5, 'Al-Shmal', 95400611, 15.000, 'Sohar/Majees', 9),
(6, 'a;dfgdfg', 95136287, 12.000, 'sohar', 11),
(7, 'sohar', 94613578, 15.000, 'sohar', 12),
(8, 'shinas', 94613578, 15.000, 'SHINAS', 12),
(9, 'fds', 98741256, 15.000, 'sohar', 12);

-- --------------------------------------------------------

--
-- Table structure for table `tblreservation`
--

DROP TABLE IF EXISTS `tblreservation`;
CREATE TABLE IF NOT EXISTS `tblreservation` (
  `rno` int(4) NOT NULL AUTO_INCREMENT COMMENT 'Reservation Number',
  `date` date NOT NULL COMMENT 'Reservation Date',
  `time` varchar(5) DEFAULT NULL COMMENT 'Reservation Time',
  `plno` int(4) DEFAULT NULL COMMENT 'Playground NO',
  `pid` int(4) NOT NULL COMMENT 'Player ID',
  `paid` int(1) DEFAULT NULL COMMENT 'Payment Done',
  PRIMARY KEY (`rno`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblreservation`
--

INSERT INTO `tblreservation` (`rno`, `date`, `time`, `plno`, `pid`, `paid`) VALUES
(26, '2022-04-15', '6-7', 5, 4, NULL),
(27, '2022-04-13', '4-5', 5, 4, NULL),
(28, '2022-04-01', '10-11', 7, 7, NULL),
(29, '2022-04-13', '4-5', 8, 6, NULL),
(30, '2022-04-13', '6-7', 8, 6, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
