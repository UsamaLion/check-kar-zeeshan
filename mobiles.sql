-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2019 at 02:07 PM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mobiles`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`ID` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `name`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`ID` int(11) NOT NULL,
  `company` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ID`, `company`) VALUES
(1, 'Apple'),
(2, 'Qmobile'),
(3, 'Nokia'),
(4, 'Samsung'),
(5, 'Huawei'),
(6, 'Oppo'),
(7, 'HTC');

-- --------------------------------------------------------

--
-- Table structure for table `mobile_data`
--

CREATE TABLE IF NOT EXISTS `mobile_data` (
`ID` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `company` varchar(60) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `mobile_data`
--

INSERT INTO `mobile_data` (`ID`, `name`, `price`, `description`, `company`, `image`) VALUES
(1, 'nokia', 15000, 'abc', 'nokia', 'YU_Yureka_2_L_1.jpg'),
(2, 'q mobile', 13500, 'ok', 'Qmobile', 'images (2).jpg'),
(7, 'iPhone 5', 21000, 'Front glass, aluminum body <br> CPU : Dual-core 1.3 GHz Swift (ARM v7-based)<br>  Features : face detection', 'apple', 'apple-iphone-5-ofic.jpg'),
(8, 'iPhone 6s', 26000, 'Text, talk and play games with this unlocked 64GB Apple iPhone 6s.', 'apple', '6s.jpg'),
(9, 'Oppo F7', 50000, 'SIM	Dual Sim, Dual Standby <br>Size	6.2 Inches <br>  Resolution	1080 x 2280', 'Oppo', 'OppoF7128GB-b.gif'),
(10, 'Samsung Galaxy J6 Plus', 31000, 'CPU	1.4 GHz<br>Size	6.0 Inches  <br>SIM	Dual Sim<br>Colors	Gold, Black, Pink, Gray', 'Samsung', 'SamsungGalaxyJ6Plus-b.gif'),
(11, 'Huawei Honor 7', 40000, 'SIM	Dual Sim<br>Colors	Gray, Silver, Gold  <br>Size	5.2 Inches  <br>Camera 8 MP, f/2.4, 26mm', 'Huawei', 'Honor7b.gif'),
(12, 'Huawei Mate 10', 34000, 'Weight	164g<br>Memory	64GB Built-in<br>Display Size	5.9 inches<br>Sim dual sim<br>Camera	Dual 16 MP + 2 MP', 'Huawei', 'HuaweiMate10Lite-b.gif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `mobile_data`
--
ALTER TABLE `mobile_data`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `mobile_data`
--
ALTER TABLE `mobile_data`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
