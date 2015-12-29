-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2015 at 08:25 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `bdate` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zipcode` int(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `pin` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`username`, `password`, `email`, `phone`, `gender`, `bdate`, `address`, `city`, `state`, `zipcode`, `country`, `type`, `pin`) VALUES
('mamataj', '123', 'm@ymail.com', '6t8868555555555', 'Felame', '0000-00-00', 'nnnnnn', 'chapai', 'chapai', 1234, 'bbb', 'SA', 222),
('mamataj', '123', 'm@ymail.com', '6t8868555555555', 'Felame', '0000-00-00', 'nnnnnn', 'chapai', 'chapai', 1234, 'bbb', 'SA', 222),
('', '', '', '', '', '0000-00-00', '', '', '', 0, '', '', 0),
('', '', '', '', '', '0000-00-00', '', '', '', 0, '', '', 0),
('', '', '', '', '', '0000-00-00', '', '', '', 0, '', '', 0),
('', '', '', '', '', '0000-00-00', '', '', '', 0, '', '', 0),
('mahal', '2222', 'm@ymail.com', '097777777777777', 'Felame', '0000-00-00', 'fffff', 'chapai', 'chapai', 3333, 'bb', 'SA', 5555),
('', '', '', '', '', '', '', '', '', 0, '', '', 0),
('', '', '', '', '', '', '', '', '', 0, '', '', 0),
('mamataj mahal', '333', 'm@ymail.com', '00000000000', 'Felame', '22-11-2012', 'nn', 'chapai', 'chapai', 1233, 'vvvvv', 'SA', 2222),
('', '', '', '', '', '', '', '', '', 0, '', '', 0),
('mmmm', '111', 'm@ymail.com', '011111111', 'Felame', '11-11-2012', 'chapai', 'chapai', 'sss', 111111, 'bangladesh', 'CA', 234),
('sumona', '123', 'a@ymail.com', '000000000', 'Felame', '11-11-15', 'aaaaaa', 'wwwww', 'ssssss', 123, 'cccccccc', 'CA', 222);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_name` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_name`, `password`) VALUES
('mamataj mahal', '123'),
('sumona', '123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
