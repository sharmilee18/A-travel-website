-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2017 at 08:12 PM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `persondata`
--

-- --------------------------------------------------------

--
-- Table structure for table `personinformation`
--

CREATE TABLE IF NOT EXISTS `personinformation` (
  `Firstname` varchar(50) DEFAULT NULL,
  `Lastname` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Country` varchar(50) DEFAULT NULL,
  `Password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personinformation`
--

INSERT INTO `personinformation` (`Firstname`, `Lastname`, `Email`, `Country`, `Password`) VALUES
('', '', '', '', ''),
('', '', '', '', ''),
('riti', 'ahmed', 'riti@ahmed', 'bangladesh', '123'),
('riti', 'ahmed', 'riti@ahmed', 'bangladesh', '123'),
('riti', 'ahmed', 'riti@ahmed', 'bangladesh', '123'),
('sabera', 'ahmed', 'sabera@gmail.com', 'bangladesh', '234');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
