-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 30, 2018 at 11:50 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `diamond`
--
CREATE DATABASE IF NOT EXISTS `diamond` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `diamond`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) NOT NULL,
  `password` varchar(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `password`) VALUES
(1, 'jnl', '55');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `image`, `des`) VALUES
(1, 'hong-kong', 'upload/Koala.jpg', 'helt at Hbc'),
(2, 'Jenil Congraulations ', 'upload/Chrysanthemum.jpg', 'Congo for schieving this....');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `img_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `data` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`img_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=70 ;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`img_id`, `name`, `data`, `type`) VALUES
(57, 'almond.jpg', 'upload/almond.jpg', 'white'),
(58, 'cushion.jpg', 'upload/cushion.jpg', 'white'),
(59, 'heart.jpg', 'upload/heart.jpg', 'white'),
(60, 'marques.jpg', 'upload/marques.jpg', 'white'),
(61, 'oval.jpg', 'upload/oval.jpg', 'white'),
(62, 'round.jpg', 'upload/round.jpg', 'white'),
(63, 'square.jpg', 'upload/square.jpg', 'white'),
(64, 'alomnd1.jpg', 'upload/alomnd1.jpg', 'fancy'),
(66, 'emerald.jpg', 'upload/emerald.jpg', 'fancy'),
(67, 'radiant.jpg', 'upload/radiant.jpg', 'fancy'),
(68, 'cushion2.jpg', 'upload/cushion2.jpg', 'fancy'),
(69, 'cushion1.jpg', 'upload/cushion1.jpg', 'fancy');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `shape` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `carat` double NOT NULL,
  `cut` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `clarity` varchar(255) NOT NULL,
  `depth` varchar(255) NOT NULL,
  `table` varchar(200) NOT NULL,
  `polish` varchar(255) NOT NULL,
  `symmetry` varchar(200) NOT NULL,
  `girdle` varchar(255) NOT NULL,
  `measurement` varchar(255) NOT NULL,
  `stock` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=108 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `image`, `shape`, `price`, `carat`, `cut`, `color`, `clarity`, `depth`, `table`, `polish`, `symmetry`, `girdle`, `measurement`, `stock`) VALUES
(7, '', 'Round', 600, 0.5, 'Good', 'J', 'VS2', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(8, '', 'Round', 300, 1, 'Very Good', 'J', 'VS1', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(9, '', 'Round', 319, 2.5, 'Ideal', 'J', 'SI1', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(10, '', 'Round', 345, 3.9, 'Very Ideal', 'J', 'VVS2', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(11, '', 'Round', 374, 4.8, 'Good', 'J', 'VS2', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(12, '', 'Round', 399, 5.6, 'Very Good', 'J', 'VVS1', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(13, '', 'Round', 425, 6.5, 'Ideal', 'J', 'VS1', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(14, '', 'Round', 460, 7.8, 'Very Ideal', 'J', 'SI2', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(15, '', 'Round', 500, 8.2, 'Good', 'J', 'VS2', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(16, '', 'Round', 540, 9.5, 'Very Good', 'J', 'VS1', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(17, '', 'Round', 610, 10, 'Ideal', 'J', 'SI1', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(18, '', 'Round', 699, 11.5, 'Very Ideal', 'J', 'VVS1', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(19, '', 'Round', 756, 12.6, 'Good', 'J', 'VS2', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(20, '', 'Round', 888, 13.7, 'Very Good', 'J', 'SI2', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(21, '', 'Round', 960, 14.8, 'Ideal', 'J', 'VS1', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(22, '', 'Round', 1010, 15.9, 'Very Ideal', 'J', 'SI1', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(23, '', 'Round', 1530, 16.5, 'Good', 'J', 'SI2', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(24, '', 'Round', 1699, 17.6, 'Very Good', 'J', 'VVS1', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(25, '', 'Round', 1988, 18.2, 'Ideal', 'J', 'VS2', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(26, '', 'Round', 2222, 19.2, 'Very Ideal', 'J', 'SI1', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(27, '', 'Round', 2655, 20.4, 'Good', 'J', 'VS1', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(28, '', 'Round', 3200, 21.6, 'Very Good', 'J', 'SI1', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(29, '', 'Round', 3588, 22, 'Ideal', 'J', 'VVS1', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(30, '', 'Round', 3777, 23.6, 'Very Ideal', 'J', 'VS1', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(31, '', 'Round', 4010, 24.1, 'Good', 'J', 'SI2', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(32, '', 'Round', 5010, 25.9, 'Very Good', 'J', 'SI1', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(33, '', 'Round', 5600, 27, 'Ideal', 'J', 'VS1', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(34, '', 'Round', 5800, 26.8, 'Very Ideal', 'J', 'VS2', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(35, '', 'Round', 6000, 28.6, 'Good', 'J', 'VVS1', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(36, '', 'Round', 5111, 19.2, 'Very Good', 'J', 'VS2', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(37, '', 'Pear', 4588, 1.5, 'Good', 'J', 'VS1', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(38, '', 'Pear', 999, 3.5, 'Very Good', 'J', 'VS2', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(39, '', 'Pear', 1546, 9.5, 'Ideal', 'J', 'VVS2', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(40, '', 'Pear', 2100, 12.2, 'Good', 'J', 'SI1', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(41, '', 'Pear', 2800, 16.5, 'Ideal', 'J', 'SI1', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(42, '', 'Pear', 3600, 17.5, 'Very Good', 'J', 'VVS2', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(43, '', 'Pear', 4200, 19.9, 'Very Ideal', 'J', 'VS1', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(44, '', 'Pear', 4900, 22.2, 'Good', 'J', 'VVS2', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(45, '', 'Pear', 5400, 28.5, 'Very Ideal', 'J', 'VVS2', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(46, '', 'Pear', 5777, 24.3, 'Very Good', 'J', 'VS2', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(47, '', 'Pear', 616, 6.8, 'Good', 'J', 'SI1', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(48, '', 'Heart', 600, 1.5, 'Good', 'J', 'VVS2', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(49, '', 'Heart', 1115, 5.6, 'Very Good', 'J', 'SI1', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(50, '', 'Heart', 2111, 7.8, 'Very Good', 'J', 'SI1', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(51, '', 'Heart', 1777, 9.5, 'Good', 'J', 'VVS2', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(52, '', 'Heart', 2699, 12.4, 'Very Ideal', 'J', 'VS1', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(53, '', 'Heart', 3200, 14.5, 'Ideal', 'J', 'SI1', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(54, '', 'Heart', 3700, 16.5, 'Very Ideal', 'J', 'VS1', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(55, '', 'Heart', 4365, 18.8, 'Good', 'J', 'VVS2', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(56, '', 'Heart', 4748, 21.1, 'Ideal', 'J', 'VS1', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(57, '', 'Heart', 5255, 25.5, 'Very Ideal', 'J', 'VS1', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(58, '', 'Marquise', 700, 6.5, 'Very Good', 'J', 'VVS1', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(59, '', 'Marquise', 1154, 8.8, 'Good', 'J', 'VVS2', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(60, '', 'Marquise', 1800, 10, 'Ideal', 'J', 'VS1', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(61, '', 'Marquise', 2223, 12.6, 'Very Good', 'J', 'VVS1', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(62, '', 'Marquise', 2556, 14.6, 'Ideal', 'J', 'SI2', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(63, '', 'Marquise', 3222, 18.5, 'Very Good', 'J', 'VS1', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(64, '', 'Marquise', 3956, 21.6, 'Good', 'J', 'VVS1', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(65, '', 'Marquise', 4656, 24.5, 'Very Ideal', 'J', 'VVS2', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(66, '', 'Marquise', 5100, 28.3, 'Good', 'J', 'VS1', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(68, '', 'Oval', 900, 3.5, 'Good', 'J', 'VVS1', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(69, '', 'Oval', 1567, 8.8, 'Ideal', 'J', 'SI1', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(70, '', 'Oval', 1999, 11.3, 'Very Good', 'J', 'SI1', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(71, '', 'Oval', 2111, 14.6, 'Good', 'J', 'VVS2', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(72, '', 'Oval', 2998, 17.4, 'Ideal', 'J', 'VS1', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(73, '', 'Oval', 3655, 21.1, 'Very Good', 'J', 'VVS1', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(74, '', 'Oval', 4521, 23.5, 'Good', 'J', 'VVS2', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(75, '', 'Oval', 4000, 13.5, 'Ideal', 'J', 'VS1', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(76, '', 'Oval', 5800, 19.9, 'Very Ideal', 'J', 'VVS2', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(77, '', 'Oval', 2654, 27.1, 'Very Good', 'J', 'SI1', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(78, '', 'Emerald', 900, 6.5, 'Very ideal', 'J', 'VVS1', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(79, '', 'Emerald', 900, 9.8, 'Good', 'J', 'SI2', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(80, '', 'Emerald', 1556, 13.3, 'Very ideal', 'J', 'SI1', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(81, '', 'Emerald', 1900, 16.6, 'Ideal', 'J', 'VVS2', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(82, '', 'Emerald', 2200, 19.8, 'Very Good', 'J', 'VVS1', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(83, '', 'Emerald', 2800, 22.2, 'Good', 'J', 'SI2', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(84, '', 'Emerald', 3200, 15.2, 'Very Good', 'J', 'VS1', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(85, '', 'Emerald', 3565, 22.2, 'Very ideal', 'J', 'SI1', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(86, '', 'Emerald', 4000, 21.1, 'Ideal', 'J', 'VVS2', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(87, '', 'Emerald', 4200, 26.5, 'Ideal', 'J', 'VS1', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(88, '', 'Cushion', 900, 6.8, 'Good', 'J', 'VVS2', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(89, '', 'Cushion', 1600, 9.3, 'Very Good', 'J', 'VS2', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(90, '', 'Cushion', 1999, 11.1, 'Ideal', 'J', 'SI1', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(91, '', 'Cushion', 2300, 14.3, 'Good', 'J', 'SI2', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(92, '', 'Cushion', 2800, 18.2, 'Very Ideal', 'J', 'SI1', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(93, '', 'Cushion', 3200, 16.2, 'Ideal', 'J', 'VVS2', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(94, '', 'Cushion', 3600, 22.2, 'Good', 'J', 'VVS1', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(95, '', 'Cushion', 4100, 21.1, 'Very Good', 'J', 'SI2', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(96, '', 'Cushion', 2666, 25.5, 'Very Good', 'J', 'VS2', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(97, '', 'Cushion', 5800, 26.2, 'Ideal', 'J', 'VVS2', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(98, '', 'Princess', 900, 8.3, 'Good', 'J', 'VS2', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(99, '', 'Princess', 1600, 12.2, 'Ideal', 'J', 'VVS2', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(100, '', 'Princess', 2000, 18.8, 'Ideal', 'J', 'SI1', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(101, '', 'Princess', 2300, 16.3, 'Very Good', 'J', 'VS2', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(102, '', 'Princess', 2800, 22.2, 'Good', 'J', 'VVS2', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(103, '', 'Princess', 3200, 9.5, 'Ideal', 'J', 'VS2', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(104, '', 'Princess', 3400, 11.4, 'Ideal', 'J', 'SI1', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(105, '', 'Princess', 4200, 14.8, 'Very Good', 'J', 'VS2', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(106, '', 'Princess', 4800, 25.5, 'Ideal', 'J', 'VVS2', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092'),
(107, '', 'Princess', 5300, 20, 'Very Ideal', 'J', 'SI1', '57.3%', '59.7%', 'Good', 'Excellent', 'Slightly Thick to Very Thick', '3.94 x 3.96 x 2.46 mm', 'LD09669092');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company` varchar(255) NOT NULL,
  `contact_person` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` int(8) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `feedback` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `company`, `contact_person`, `address`, `city`, `state`, `zip`, `email`, `password`, `feedback`) VALUES
(11, 'jnl', 'hj', 'jn', 'kj', 'knk', 222, 'jenilnfar7ola@gmail.com', '', 'kk'),
(12, 'jnl', 'hj', 'jn', 'kj', 'mm', 0, 'jenilnaaar7ola@gmail.com', '', '65131'),
(13, 'jnl', 'hj', 'jn', 'kj', 'knk', 123, 'jenilnarola1@gmail.com', '', 'Non'),
(15, 'jenil narola12', 'jenil', '4-rushikeshzzz12', 'surat12', 'goa12', 39500412, 'jenilnarola@gmail.com', '55', 'Non greAT12'),
(16, 'jnl', 'hj', 'jn', 'kj', 'knk', 123, 'dungranibrijesh@gmail.com', '223', 'Non'),
(17, 'ak', 'ashishgadhiya', 'maninagar', 'surat', 'gujrat', 123, 'ashishgadhiya60@gmail.com', '', 'Non'),
(18, 'Ritva sutariya', 'ritva', 'mota varacha', 'surat', 'gujrat', 395004, 'ritvasutariya83@gmail.com', '', 'Nice work '),
(19, 'jnl', 'ml', 'jn', 'kj', 'knk', 123, 'avnidhameliya1234@gmail.com', '', 'erfer'),
(20, 'LaxminarayanGems', 'jnk', 'katargam', 'surat', 'gujarat', 0, 'keyurchandpar1@gmail.com', '23', 'None');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
