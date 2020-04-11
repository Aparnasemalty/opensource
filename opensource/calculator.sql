-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 11, 2020 at 11:38 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `calculator`
--

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

DROP TABLE IF EXISTS `result`;
CREATE TABLE IF NOT EXISTS `result` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `subject1` varchar(100) NOT NULL,
  `subject2` varchar(100) NOT NULL,
  `subject3` varchar(100) NOT NULL,
  `subject4` varchar(100) NOT NULL,
  `subject5` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `semister` varchar(50) NOT NULL,
  `percentage` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `subject1`, `subject2`, `subject3`, `subject4`, `subject5`, `username`, `semister`, `percentage`) VALUES
(53, '30', '100', '100', '100', '80', '11201111', '1', '82'),
(52, '', '', '', '', '', '11201111', '', '0'),
(51, '30', '40', '30', '70', '80', '11707172', '3', '50'),
(50, '', '', '', '', '', '11707172', '', '0'),
(49, '100', '100', '100', '100', '100', '11707172', '2', '100'),
(47, '30', '40', '60', '70', '100', '11707172', '1', '60'),
(48, '', '', '', '', '', '11707172', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `name`, `password`) VALUES
(13, '11613280', 'Aparna semalty', '123'),
(9, '11707172', 'pranshu', '12345'),
(14, '11201111', 'abc', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
