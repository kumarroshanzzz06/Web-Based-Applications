-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2015 at 07:38 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `college_login`
--

CREATE TABLE IF NOT EXISTS `college_login` (
  `uname` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `clgname` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college_login`
--

INSERT INTO `college_login` (`uname`, `password`, `clgname`) VALUES
('GIET', '254fc90a64b1415aa47a7583fa402912', 'GANDHI INSTITUTE OF ENGINEERING AND TECHNOLOGY, GUNUPUR');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `college_login`
--
ALTER TABLE `college_login`
  ADD PRIMARY KEY (`uname`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
