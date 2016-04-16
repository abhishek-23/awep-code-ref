-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 16, 2016 at 10:00 PM
-- Server version: 5.5.47-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `learnjsphp`
--
CREATE DATABASE IF NOT EXISTS `learnjsphp` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `learnjsphp`;

-- --------------------------------------------------------

--
-- Table structure for table `login_info`
--

CREATE TABLE IF NOT EXISTS `login_info` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `profession` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_info`
--

INSERT INTO `login_info` (`id`, `username`, `password`, `fullname`, `profession`) VALUES
(1, 'root', '133987b0b6ad0c01fc0ccbdae1b95449', 'Root', 'Administrator'),
(2, 'rkhanna', 'cd84d683cc5612c69efe115c80d0b7dc', 'Rahul Khanna', 'IT Consultant'),
(3, 'rshetty', 'cd84d683cc5612c69efe115c80d0b7dc', 'Rohit Shetty', 'Electrical Engineer'),
(4, 'dpatil', 'cd84d683cc5612c69efe115c80d0b7dc', 'Deepika Patil', 'Chief Executive Officer'),
(5, 'roshnig', 'cd84d683cc5612c69efe115c80d0b7dc', 'Roshni Gupta', 'Software Engineer');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
