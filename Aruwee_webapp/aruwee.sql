-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 12, 2014 at 09:43 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `aruwee`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `age` tinyint(3) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `marital_status` text NOT NULL,
  `address` text NOT NULL,
  `medcon` text NOT NULL,
  `discription` text NOT NULL,
  `refname` varchar(25) NOT NULL,
  `refcontact` tinyint(10) NOT NULL,
  `addmed` text NOT NULL,
  `docconcern` varchar(25) NOT NULL,
  `activity` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`ID`, `name`, `age`, `sex`, `marital_status`, `address`, `medcon`, `discription`, `refname`, `refcontact`, `addmed`, `docconcern`, `activity`) VALUES
(1, 'htfgh', 2, 'm', 'hhjk', '', '2', '', '', 0, '', '', ''),
(2, 'qwe', 8, 'm', '', '', 'uyy', 'gffd', 'uyfd', 0, 'wertyy', 'fgrgs', 'srffsft'),
(3, '$name', 0, '$gende', '', '', '', '', '', 0, '', '', ''),
(4, 'HARSHAD kumar', 8, 'mALE', '', '', 'LOKIJ', 'UIOMH', 'PLMKIUBBGT', 0, 'wertyy', 'fgrgs', 'srffsft'),
(5, 'hitres', 90, 'male', '', '', 'tyi', 'vbn', 'tyujhyt', 0, 'mkiuyh', 'bgtyuj', 'bjuygh'),
(6, 'hitresqwert', 90, 'male', 'Single', '', 'tyi', 'vbn', 'tyujhyt', 0, 'mkiuyh', 'bgtyuj', 'bjuygh'),
(7, 'HARSHAD kumar', 21, 'male', 'Widow', '', 'qwert', 'fine', 'poiw', 0, 'qwerty', 'padir', 'werit');

-- --------------------------------------------------------

--
-- Table structure for table `donar`
--

CREATE TABLE IF NOT EXISTS `donar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `age` int(3) NOT NULL,
  `gender` text NOT NULL,
  `phone` int(11) NOT NULL,
  `email` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `donar`
--

INSERT INTO `donar` (`id`, `name`, `age`, `gender`, `phone`, `email`) VALUES
(1, 'ssssshuytd', 123, 'Male ', 0, ''),
(2, 'ssssshuytdfdertaswet', 123, 'Male ', 22, 'sss'),
(3, 'ssssshuytdfdertaswetyattstt', 123, 'Male ', 22, 'sss'),
(4, 'ssssshuytdfdertaswetyattsttqqwe', 123, 'Male ', 22, 'sss');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `password`) VALUES
(1, 'aruwee123', 'aruwee123'),
(2, '', ''),
(3, 'sample', 'sample'),
(4, 'sample1', 'sample1'),
(5, 'harshad', 'harshad'),
(6, 'mani', 'mani'),
(7, 'nandha', 'nandha');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE IF NOT EXISTS `volunteer` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `occupation` text NOT NULL,
  `address` text NOT NULL,
  `Mnumber` int(10) NOT NULL,
  `age` tinytext NOT NULL,
  `sex` varchar(64) NOT NULL,
  `email` text NOT NULL,
  PRIMARY KEY (`Id`,`Mnumber`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`Id`, `name`, `occupation`, `address`, `Mnumber`, `age`, `sex`, `email`) VALUES
(1, 'nnn', '', '', 0, '45', 'Male', ''),
(2, 'qwe', '', '', 0, '2', 'Female', ''),
(3, 'dkfmkla', '', 'fkdmkm', 8473, '8', 'Male', ''),
(4, 'harshie', '', 'jngjaern', 984747, '47', 'Male', ''),
(5, 'jdfnq', 'nefuq', 'dvsbvgya', 876, '87', 'Male', ''),
(6, 'hhdabuhb', 'uhhb', 'hudbgyb', 87765, '67', 'Male', 'nadnh@'),
(7, 'ttt', 'uuu', 'frtg', 98443, '21', 'Male', 'fgh56');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
