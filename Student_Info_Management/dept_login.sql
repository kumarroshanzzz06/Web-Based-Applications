-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2015 at 02:20 PM
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
-- Table structure for table `dept_login`
--

CREATE TABLE IF NOT EXISTS `dept_login` (
  `dept_name` varchar(30) NOT NULL,
  `dept_pass` varchar(100) NOT NULL,
  PRIMARY KEY (`dept_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dept_login`
--

INSERT INTO `dept_login` (`dept_name`, `dept_pass`) VALUES
('ADMIN', 'a65a12a75cc5836d9848442914183d07'),
('AEI', 'f2e2c3719af1131cb9b3f1afe93f08a2'),
('BT', '1e1f3c348eb6d597c23e5269bc0945b8'),
('CHEMICAL', 'fabad03455ad3e5a40d63568f7718e5b'),
('CIVIL', '2af28c885f400c22328b896d7c87832c'),
('CSE', 'c1564f628e7a5c0a095c39b0de7ec6a8'),
('ECE', '3b6bfd49cac67fdf8650e3dfd68837b5'),
('EE', 'd70a2616ee8fe1c494f1854a76310520'),
('EEE', '7cd0a2fb9367b795774ecbb9bee8bd99'),
('IT', 'becc8c49d5a78935ea91d2338e2433e4'),
('MECH', 'bbdc9963457a3da243fd22e6586ede1f'),
('METALLURGY', 'a97c69be430bd1bfb14c9f27fcd16647'),
('BSH', 'becc8c49d5a78935ea91d2338e2433e4');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
