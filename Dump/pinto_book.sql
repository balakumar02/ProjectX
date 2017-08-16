-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2017 at 11:27 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `projectx`
--

-- --------------------------------------------------------

--
-- Table structure for table `pinto_book`
--

CREATE TABLE IF NOT EXISTS `pinto_book` (
  `DEL_ID` int(10) NOT NULL AUTO_INCREMENT,
  `USER_ID` int(10) NOT NULL,
  `CUSTOMER_NAME` varchar(256) NOT NULL,
  `MOBILE_NO` varchar(128) NOT NULL,
  `ADDRESS` varchar(256) NOT NULL,
  `CLASS` varchar(256) NOT NULL,
  `PRODUCT_NAME` varchar(256) NOT NULL,
  `PRODUCT_ID` varchar(256) NOT NULL,
  `QUANTITY` int(30) NOT NULL,
  `DISPATCH_TIME` timestamp NULL DEFAULT NULL,
  `DELIVERY_TIME` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`DEL_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='pINTO delivery details' AUTO_INCREMENT=9 ;

--
-- Dumping data for table `pinto_book`
--

INSERT INTO `pinto_book` (`DEL_ID`, `USER_ID`, `CUSTOMER_NAME`, `MOBILE_NO`, `ADDRESS`, `CLASS`, `PRODUCT_NAME`, `PRODUCT_ID`, `QUANTITY`, `DISPATCH_TIME`, `DELIVERY_TIME`) VALUES
(8, 101, 'Bala', '9626030304', 'RailwayGate, Udumalpet', 'KICKGRASS', 'Chicken Burger', '1001', 3, '2017-08-08 18:32:21', '2017-08-06 22:25:42');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
