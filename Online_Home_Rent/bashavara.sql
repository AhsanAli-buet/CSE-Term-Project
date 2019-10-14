-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2015 at 05:53 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bashavara`
--
CREATE DATABASE IF NOT EXISTS `bashavara` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bashavara`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `adminid` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `division` varchar(50) NOT NULL,
  PRIMARY KEY (`adminid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `name`, `email`, `password`, `division`) VALUES
(1, 'ahsan', 'ahsanali@gmail.com', '1234', 'Dhaka'),
(2, 'ratul', 'ra2l@gmail.com', '2214', 'Mymensingh'),
(3, 'shifat', 'shifat@gmail.com', '3456', 'Chittagong');

-- --------------------------------------------------------

--
-- Table structure for table `admin_message`
--

DROP TABLE IF EXISTS `admin_message`;
CREATE TABLE IF NOT EXISTS `admin_message` (
  `mszid` int(11) NOT NULL AUTO_INCREMENT,
  `msz` varchar(400) NOT NULL,
  `date` datetime NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  PRIMARY KEY (`mszid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `admin_message`
--

INSERT INTO `admin_message` (`mszid`, `msz`, `date`, `admin_name`) VALUES
(1, 'The 3rd page reports don''t contain any links. Does anyone know why df fhfh dgdf dfgd dfg dfg dgdsres sfjhfdjd dsgsdwiuyt aiseu euoqansdf sfisnfa asfsfnosa sfos..', '2015-12-10 17:27:43', 'ahsan'),
(2, 'The 3rd page reports don''t contain any links. Does anyone know why df fhfh dgdf dfgd dfg dfg dgdsres sfjhfdjd dsgsdwiuyt aiseu euoqansdf sfisnfa asfsfnosa sfasdabdos..', '2015-12-10 17:31:20', 'ahsan'),
(3, 'The 3rd page reports don''t contain any links. Does anyone know why df fhfh dgdf dfgd dfg dfg dgdsres sfjhfdjd dsgsdwiuyt aiseu euoqansdf sfisnfa asfsfnosa sfos..', '2015-12-10 17:31:32', 'ahsan'),
(4, 'The 3rd page reports don''t contain any links. Does anyone know why df fhfh dgdf dfgd dfg dfg dgdsres sfjhfdjd dsgsdwiuyt aiseu euoqansdf sfisnfa asfsfnosa sfos..', '2015-12-10 17:31:39', 'ahsan'),
(5, 'The 3rd page reports don''t contain any links. Does anyone know why df fhfh dgdf dfgd dfg dfg dgdsres sfjhfdjd dsgsdwiuyt aiseu euoqansdf sfisnfa asfsfnosa sfos..', '2015-12-10 17:31:50', 'ahsan'),
(6, 'The 3rd page reports don''t contain any links. Does anyone know why df fhfh dgdf dfgd dfg dfg dgdsres sfjhfdjd dsgsdwiuyt aiseu euoqansdf sfisnfa asfsfnosa sfos..', '2015-12-10 17:31:53', 'ahsan'),
(7, 'The 3rd page reports don''t contain any links. Does anyone know why df fhfh dgdf dfgd dfg dfg dgdsres sfjhfdjd dsgsdwiuyt aiseu euoqansdf sfisnfa asfsfnosa sfos..', '2015-12-10 17:31:56', 'ahsan'),
(8, 'The 3rd page reports don''t contain any links. Does anyone know why df fhfh dgdf dfgd dfg dfg dgdsres sfjhfdjd dsgsdwiuyt aiseu euoqansdf sfisnfa asfsfnosa sfos..', '2015-12-10 17:31:59', 'ahsan'),
(9, 'fhfghdgf dffdh d dfg df gdf g', '2015-12-10 17:35:24', 'ahsan'),
(10, 'hgkhk', '2015-12-11 14:09:42', 'ratul');

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

DROP TABLE IF EXISTS `advertisement`;
CREATE TABLE IF NOT EXISTS `advertisement` (
  `adid` varchar(200) NOT NULL,
  `userid` int(11) NOT NULL,
  `advertiser` varchar(50) NOT NULL,
  `division` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  `adtype` varchar(50) NOT NULL,
  `price` bigint(20) NOT NULL,
  `addate` date NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `image` int(11) NOT NULL,
  `report` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`adid`, `userid`, `advertiser`, `division`, `city`, `area`, `adtype`, `price`, `addate`, `contact`, `email`, `address`, `image`, `report`) VALUES
('17b6feb641f11569a552d25fa37e877b', 1, 'Ahsan', 'Dhaka', 'Dhaka', 'Mirpur', 'Residential', 20000, '2015-12-05', '+87127836187', 'wahridrasiftorin@gmail.com', 'asdadsadsadasdasdasdsad', 5, 5),
('7b503a8ac792a7044d9ca73023819434', 1, '1105069', 'Sylhet', 'Sylhet', 'Jatrabari', 'Residential', 50000, '2015-12-05', '+87127836187', 'ratultherokr@gmail.com', 'sadgf uydsaugfuilasgdiulfaisf', 7, 5),
('890d6433136ea06b62e49a12a9cb8f70', 1, 'ratul', 'Dhaka', 'Mymensingh', 'Banani', 'Commercial', 8000000, '2015-12-05', '+87127836187', 'wahridrasiftorin@gmail.com', 'mymenshingh,dubai', 5, 5),
('36b530aa9fb25766a3c687b8916daf72', 6, 'fgdfg', 'Dhaka', 'Sylhet', 'Lalbag', 'Commercial', 50000, '2015-12-07', 'dfgdsg', 'dsgsdg', 'asfsafasf', 2, 5),
('f0ec4cab5a0e9d5c5065d81a58f3f50b', 7, 'fgjfgj', 'Dhaka', 'Dhaka', 'Uttara', 'Residential', 12000, '2015-12-09', 'gfjfgj', 'gfjgfj', 'safsaf', 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `buy_advertisement`
--

DROP TABLE IF EXISTS `buy_advertisement`;
CREATE TABLE IF NOT EXISTS `buy_advertisement` (
  `adid` varchar(200) NOT NULL,
  `userid` int(11) NOT NULL,
  `advertiser` varchar(50) NOT NULL,
  `division` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  `adtype` varchar(50) NOT NULL,
  `price` bigint(20) NOT NULL,
  `addate` date NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `image` int(11) NOT NULL,
  `report` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `buy_alert`
--

DROP TABLE IF EXISTS `buy_alert`;
CREATE TABLE IF NOT EXISTS `buy_alert` (
  `userid` int(11) NOT NULL,
  `alertid` varchar(200) NOT NULL,
  `division` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  `adtype` varchar(50) NOT NULL,
  `pricemin` int(11) NOT NULL,
  `pricemax` int(11) NOT NULL,
  `ptype` varchar(50) NOT NULL,
  `bed` int(11) NOT NULL,
  `bath` int(11) NOT NULL,
  `lift` varchar(10) NOT NULL,
  `garage` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `buy_match`
--

DROP TABLE IF EXISTS `buy_match`;
CREATE TABLE IF NOT EXISTS `buy_match` (
  `userid` int(11) NOT NULL,
  `adid` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `buy_property`
--

DROP TABLE IF EXISTS `buy_property`;
CREATE TABLE IF NOT EXISTS `buy_property` (
  `adid` varchar(200) NOT NULL,
  `ptype` varchar(50) NOT NULL,
  `bed` int(11) DEFAULT NULL,
  `bath` int(11) DEFAULT NULL,
  `lift` varchar(10) NOT NULL,
  `garage` varchar(10) NOT NULL,
  `description` varchar(500) NOT NULL,
  `nego` varchar(10) NOT NULL,
  `appoinment` varchar(50) NOT NULL,
  `nearby` varchar(500) NOT NULL,
  `psize` varchar(200) NOT NULL,
  `pname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

DROP TABLE IF EXISTS `notification`;
CREATE TABLE IF NOT EXISTS `notification` (
  `userid` varchar(200) NOT NULL,
  `noti` varchar(400) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `other_message`
--

DROP TABLE IF EXISTS `other_message`;
CREATE TABLE IF NOT EXISTS `other_message` (
  `mszid` int(200) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `msz` varchar(400) NOT NULL,
  `replied` varchar(10) NOT NULL,
  `date` datetime NOT NULL,
  `replymsz` varchar(400) NOT NULL,
  PRIMARY KEY (`mszid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `other_message`
--

INSERT INTO `other_message` (`mszid`, `name`, `email`, `msz`, `replied`, `date`, `replymsz`) VALUES
(1, 'farabi', 'farabi@gmail.com', 'i want to rent a house more suitable than the naturals .', 'NO', '2015-12-11 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

DROP TABLE IF EXISTS `property`;
CREATE TABLE IF NOT EXISTS `property` (
  `adid` varchar(200) NOT NULL,
  `ptype` varchar(50) NOT NULL,
  `bed` int(11) NOT NULL,
  `bath` int(11) NOT NULL,
  `lift` varchar(10) NOT NULL,
  `garage` varchar(10) NOT NULL,
  `description` varchar(500) NOT NULL,
  `nego` varchar(10) NOT NULL,
  `appoinment` varchar(50) NOT NULL,
  `nearby` varchar(500) NOT NULL,
  `psize` varchar(20) NOT NULL,
  `pname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`adid`, `ptype`, `bed`, `bath`, `lift`, `garage`, `description`, `nego`, `appoinment`, `nearby`, `psize`, `pname`) VALUES
('17b6feb641f11569a552d25fa37e877b', 'Floor Space', 3, 2, 'YES', 'YES', 'This contemporary townhouse is only two years old and is one of only nine properties in the popular boutique development of “Corowa”. High ceilings, floor to ceiling sliding doors and large double-glazed windows fill the home with light. Reverse cycle air-conditioning and a solar passive design ensures year round comfort.', 'NO', '12:00 pm', 'HighSchool,Bazar,Busstand', '2000', 'asdadadads'),
('7b503a8ac792a7044d9ca73023819434', 'Duplex', 3, 2, 'YES', 'YES', 'This contemporary townhouse is only two years old and is one of only nine properties in the popular boutique development of “Corowa”. High ceilings, floor to ceiling sliding doors and large double-glazed windows fill the home with light. Reverse cycle air-conditioning and a solar passive design ensures year round comfort.', 'YES', '12:00 am', 'HighSchool,Bazar,Busstand', '2000', 'tea palace'),
('890d6433136ea06b62e49a12a9cb8f70', 'Floor Space', 1, 5, 'NO', 'YES', 'kaifa haluka', 'NO', '6:00 pm', 'HighSchool,Bazar,Busstand', '20000', 'Burj khalifa'),
('36b530aa9fb25766a3c687b8916daf72', 'Floor Space', 1, 5, 'NO', 'NO', 'hjgjhf', 'YES', 'sdfg', 'HighSchool,Bazar,Busstand', '1250', 'adasd'),
('f0ec4cab5a0e9d5c5065d81a58f3f50b', 'Duplex', 3, 2, 'YES', 'YES', 'fdgdfdfh', 'NO', 'gfjfgj', 'ghfjfg', '1200', 'safs');

-- --------------------------------------------------------

--
-- Table structure for table `rent_alert`
--

DROP TABLE IF EXISTS `rent_alert`;
CREATE TABLE IF NOT EXISTS `rent_alert` (
  `userid` int(11) NOT NULL,
  `alertid` varchar(200) NOT NULL,
  `division` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  `adtype` varchar(50) NOT NULL,
  `pricemin` int(11) NOT NULL,
  `pricemax` int(11) NOT NULL,
  `ptype` varchar(50) NOT NULL,
  `bed` int(11) DEFAULT NULL,
  `bath` int(11) DEFAULT NULL,
  `lift` varchar(10) NOT NULL,
  `garage` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rent_match`
--

DROP TABLE IF EXISTS `rent_match`;
CREATE TABLE IF NOT EXISTS `rent_match` (
  `userid` int(11) NOT NULL,
  `adid` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

DROP TABLE IF EXISTS `report`;
CREATE TABLE IF NOT EXISTS `report` (
  `adid` varchar(200) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `email`, `password`) VALUES
(1, 'ahsan', 'ahsanali@gmail.com', '1234'),
(2, 'ahsanali', 'ahsanali061335@gmail.com', '1234'),
(3, 'shifat', 'shifat@gmail.com', '2222'),
(7, 'ra2l', 'ra2l.cse.b@gmail.com', '244572');

-- --------------------------------------------------------

--
-- Table structure for table `wish_list`
--

DROP TABLE IF EXISTS `wish_list`;
CREATE TABLE IF NOT EXISTS `wish_list` (
  `userid` int(11) NOT NULL,
  `adid` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
