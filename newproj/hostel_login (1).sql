-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2015 at 03:18 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `hostel_login`
--

CREATE TABLE IF NOT EXISTS `hostel_login` (
  `hostel_name` varchar(50) NOT NULL,
  `passwd` varchar(100) NOT NULL,
  PRIMARY KEY (`hostel_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostel_login`
--

INSERT INTO `hostel_login` (`hostel_name`, `passwd`) VALUES
('GAYATRI-1', 'f629a81a67695d47b4ce0a4dc8a24ecc'),
('GAYATRI-2', '6cb50b75280568101af0fb311694923a'),
('KRUPASINDHU', 'd6dd39a491dc1558a544876408ae25dc'),
('MM-1', '2a750cd592ca9ff64120643aa8da928c'),
('MM-2', '811849b1be57a988c673872f0074c2cd'),
('NC1', '1acb644a19eff7bb78d557c03f986bfd'),
('NC10', 'e02fae4a9ddbd2cb208e54f8195b9285'),
('NC11', '9cf38c4cc83179e6ea464d345096048a'),
('NC12', '9b5984ac5c9f8c3313e27404b854e034'),
('NC2', '86cab0b1b0354983aedf061c895df5ab'),
('NC3', '036267a2cfbff11f7c965e4a77d4e48f'),
('NC4', '15c2eb9a215b79bfff8fc03dc3ddea3a'),
('NC5', '22ca575c44952c2b028f3bff8fa321d7'),
('NC6', '16490834f83280d60bc86b5eea2bbffe'),
('NC7', 'c6d83d0647197d2b5c13941e8b0ea47a'),
('NC8', '490b33b58e51b36924bad52884ca49ee'),
('NC9', 'd7ddf6bee0b54ab324470811ab78e472'),
('SS', '5ee14e0de57fb623e07f275bb1cdabed');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
