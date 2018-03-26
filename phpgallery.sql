-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 26, 2018 at 05:33 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpgallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `agroup`
--

DROP TABLE IF EXISTS `agroup`;
CREATE TABLE IF NOT EXISTS `agroup` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `Name` (`Name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `agroup`
--

INSERT INTO `agroup` (`ID`, `Name`) VALUES
(1, 'Dessins'),
(4, 'Europe'),
(2, 'France'),
(3, 'Italie');

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

DROP TABLE IF EXISTS `artist`;
CREATE TABLE IF NOT EXISTS `artist` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `First Name` varchar(16) COLLATE utf8_bin NOT NULL,
  `Family Name` varchar(16) COLLATE utf8_bin NOT NULL,
  `Admin` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`ID`),
  KEY `First Name` (`First Name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`ID`, `First Name`, `Family Name`, `Admin`) VALUES
(1, 'Nemanja', 'SIMIC', 1),
(2, 'Milena', 'SIMIC', 1),
(4, 'Dobrivoje', 'SIMIC', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Gallery` int(11) NOT NULL,
  `Name` varchar(32) COLLATE utf8_bin NOT NULL,
  `Comment` text COLLATE utf8_bin NOT NULL,
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`),
  KEY `Name` (`Name`),
  KEY `Gallery` (`Gallery`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`ID`, `Gallery`, `Name`, `Comment`, `Date`) VALUES
(1, 10, 'Sophia Loren', 'You cannot say, because I am from Naples so I like the mixture of drama and comedy all together. ', '2018-03-26 19:30:57'),
(2, 10, 'Paul Hollywood', 'Naples is curiously chaotic and, if I\'m honest, a bit dilapidated. It certainly has a \'lived-in\' look. It\'s alive, it\'s vibrant, it\'s a little bit dirty, it\'s busy, and I loved it. I felt like this was how Rome would probably have been 2,000 years ago. There\'s a real bustle, and it\'s down and dirty. ', '2018-03-26 19:30:57'),
(3, 10, 'Wolfgang Amadeus Mozart', 'When I come to reflect on the subject, in no country have I received such honors or been so esteemed as in Italy, and nothing contributes more to a man\'s fame than to have written Italian operas, and especially for Naples. ', '2018-03-26 19:30:57'),
(4, 9, 'Giotto di Bondone', 'Rome is the city of echoes, the city of illusions, and the city of yearning. ', '2018-03-26 19:30:57'),
(5, 1, 'Julius Caesar', 'I had rather be first in a village than second at Rome. ', '2018-03-26 19:30:57'),
(6, 1, 'Anatole Broyard', 'Rome was a poem pressed into service as a city. ', '2018-03-26 19:30:57'),
(7, 1, 'Miguel de Cervantes', 'When thou art at Rome, do as they do at Rome. ', '2018-03-26 19:30:57'),
(8, 1, 'Livy', 'Rome has grown since its humble beginnings that it is now overwhelmed by its own greatness. ', '2018-03-26 19:30:57'),
(9, 8, 'Stefon Harris', 'I love Amsterdam. The city is vibrant and alive. It\'s fresh and so open. It\'s definitely one of my favorite places. ', '2018-03-26 19:30:57'),
(10, 8, 'Ezra Koenig', 'In Europe, I always have fun bike riding in Amsterdam. ', '2018-03-26 19:30:57'),
(11, 8, 'Janet Echelman', 'In Amsterdam, the river and canals have been central to city life for the last four centuries. ', '2018-03-26 19:30:57');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
CREATE TABLE IF NOT EXISTS `gallery` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(16) COLLATE utf8_bin NOT NULL,
  `Medium` int(11) NOT NULL DEFAULT '1',
  `Artist` int(11) NOT NULL DEFAULT '1',
  `AGroup` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`ID`,`Name`),
  KEY `Artist` (`Artist`),
  KEY `Medium` (`Medium`),
  KEY `AGroup` (`AGroup`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`ID`, `Name`, `Medium`, `Artist`, `AGroup`) VALUES
(1, 'Rome', 1, 1, 3),
(2, 'Normandie', 1, 1, 2),
(3, 'Chantilly', 1, 1, 2),
(4, 'Strasbourg', 1, 1, 2),
(5, 'Nantes', 1, 1, 2),
(6, 'Saint Malo', 1, 1, 2),
(7, 'Belgique', 1, 1, 4),
(8, 'Amsterdam', 1, 1, 4),
(9, 'Rome', 2, 1, 1),
(10, 'Naples', 1, 1, 3),
(11, 'Dessins', 2, 1, 1),
(12, 'Couleur', 2, 1, 1),
(13, 'Modèles 3D', 3, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `medium`
--

DROP TABLE IF EXISTS `medium`;
CREATE TABLE IF NOT EXISTS `medium` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `Name` (`Name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `medium`
--

INSERT INTO `medium` (`ID`, `Name`) VALUES
(3, '3D Modelling'),
(2, 'Drawings'),
(4, 'Paintings'),
(1, 'Photography');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`Gallery`) REFERENCES `gallery` (`ID`);

--
-- Constraints for table `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `gallery_ibfk_1` FOREIGN KEY (`Artist`) REFERENCES `artist` (`ID`),
  ADD CONSTRAINT `gallery_ibfk_2` FOREIGN KEY (`Medium`) REFERENCES `medium` (`ID`),
  ADD CONSTRAINT `gallery_ibfk_3` FOREIGN KEY (`AGroup`) REFERENCES `agroup` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
