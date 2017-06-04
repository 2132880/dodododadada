-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 01, 2017 at 09:38 AM
-- Server version: 5.6.13
-- PHP Version: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `online_shop`
--
CREATE DATABASE IF NOT EXISTS `online_shop` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `online_shop`;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(25) NOT NULL,
  `time` varchar(25) NOT NULL,
  `serviceType` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `contactNumber` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Truncate table before insert `booking`
--

TRUNCATE TABLE `booking`;
-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brand` varchar(20) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `price` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `code` varchar(45) DEFAULT NULL,
  `image_dir` varchar(45) DEFAULT NULL,
  `category` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=220008 ;

--
-- Truncate table before insert `products`
--

TRUNCATE TABLE `products`;
--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `brand`, `name`, `price`, `status`, `code`, `image_dir`, `category`) VALUES
(70007, 'FAAC', 'FAAC? C720 (24v) Sliding Gate Opener (Residen', '$765.00', '1', 'null', '\\assets\\img\\products\\070007.jpg', 'residential'),
(70008, 'FAAC', 'FAAC? 740 (240v) Sliding Gate Opener (Residen', '$765.00', '1', 'null', '\\assets\\img\\products\\070008.jpg', 'residential'),
(220000, 'B&D', 'B&D? (Series 2) Weatherstrip (82mm) Grey', '$22.00', '1', 'null', '\\assets\\img\\products\\220000.jpg', 'residential'),
(220001, 'B&D', 'B&D? Universal Weatherstrip (68mm) Black', '$19.00', '1', 'null', '\\assets\\img\\products\\220001.jpg', 'residential'),
(220002, 'B&D', 'B&D? (Series 2/3) Weatherstrip (52mm) Black', '$26.00', '1', 'null', '\\assets\\img\\products\\220002.jpg', 'residential'),
(220003, 'Gliderol', 'Gliderol? Weatherstrip (56mm) Grey', '$18.00', '1', 'null', '\\assets\\img\\products\\220003.jpg', 'commercial'),
(220004, 'B&D', 'B&D? Weatherstrip Adaptor (3100mm)', '$44.00', '1', 'null', '\\assets\\img\\products\\220004.jpg', 'commercial'),
(220005, 'ATA', 'ATA? U-Bolt & Saddle Assembly', '$21.00', '1', 'null', '\\assets\\img\\products\\220005.jpg', 'commercial'),
(220006, 'Vicway', 'Vicway? Coning Collar', '$12.00', '1', 'null', '\\assets\\img\\products\\220006.jpg', 'commercial'),
(220007, 'Stramit', 'Stramit? U-Bolt & Saddle Assembly', '$21.00', '1', 'null', '\\assets\\img\\products\\220007.jpg', 'commercial');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
