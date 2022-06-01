-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 09, 2021 at 03:46 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lotuste1_presetvoting`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

DROP TABLE IF EXISTS `candidate`;
CREATE TABLE IF NOT EXISTS `candidate` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) NOT NULL,
  `post` varchar(20) NOT NULL,
  `score` int(3) NOT NULL,
  `year` int(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `post` (`post`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`id`, `fullname`, `post`, `score`, `year`) VALUES
(53, 'Nyahe Elikplim Kofi ', 'bsp', 0, 2021),
(54, 'Chukuemeka Shadrach', 'bsp', 0, 2021),
(55, 'Ayeni Christiana ', 'gsp', 0, 2021),
(56, 'Ofoe Precious ', 'gsp', 0, 2021),
(57, 'Christopher Suzzy', 'gsp', 0, 2021),
(58, 'Biney Patrick ', 'src', 0, 2021),
(59, 'Arkoh Natasha', 'src', 0, 2021),
(60, 'Nyarko Lorqueta ', 'prot', 0, 2021),
(61, 'Hayfron Isaac ', 'prot', 0, 2021),
(62, 'Tsotsoo Erica ', 'cp', 0, 2021),
(63, 'Nmese John', 'cp', 0, 2021),
(64, 'Antwi Judith', 'prot', 0, 2021),
(65, 'Amoah Ethel Delali', 'ep', 0, 2021),
(66, 'Anamoo Amanda', 'nurse', 0, 2021),
(67, 'Kwantwi Louisa', 'spt', 0, 2021),
(68, 'Arkoh Jonathan ', 'ep', 0, 2021),
(69, 'Osei Richael', 'ep', 0, 2021),
(70, 'Kabore Fridosse ', 'prot', 0, 2021),
(71, 'Emielu David', 'spt', 0, 2021),
(72, 'Korkor Esther ', 'spt', 0, 2021),
(73, 'Boryle Queenstar', 'ep', 0, 2021);

-- --------------------------------------------------------

--
-- Table structure for table `control`
--

DROP TABLE IF EXISTS `control`;
CREATE TABLE IF NOT EXISTS `control` (
  `id` int(11) NOT NULL,
  `bsp` int(3) NOT NULL,
  `gsp` int(3) NOT NULL,
  `bcp` int(3) NOT NULL,
  `gcp` int(3) NOT NULL,
  `bspt` int(3) NOT NULL,
  `gspt` int(3) NOT NULL,
  `bep` int(3) NOT NULL,
  `gep` int(3) NOT NULL,
  `chap` int(3) NOT NULL,
  `src` int(3) NOT NULL,
  `nurse` int(3) NOT NULL,
  `cant` int(3) NOT NULL,
  `lib` int(3) NOT NULL,
  `prot` int(3) NOT NULL,
  `sp` int(3) NOT NULL,
  `cp` int(3) NOT NULL,
  `spt` int(3) NOT NULL,
  `ep` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `control`
--

INSERT INTO `control` (`id`, `bsp`, `gsp`, `bcp`, `gcp`, `bspt`, `gspt`, `bep`, `gep`, `chap`, `src`, `nurse`, `cant`, `lib`, `prot`, `sp`, `cp`, `spt`, `ep`) VALUES
(1, 0, 1, 0, 0, 0, 0, 0, 0, 4, 0, 1, 4, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

DROP TABLE IF EXISTS `position`;
CREATE TABLE IF NOT EXISTS `position` (
  `position_id` int(11) NOT NULL AUTO_INCREMENT,
  `position_shortname` varchar(5) NOT NULL,
  `position_fullname` varchar(50) NOT NULL,
  PRIMARY KEY (`position_id`),
  UNIQUE KEY `position_shortname` (`position_shortname`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`position_id`, `position_shortname`, `position_fullname`) VALUES
(1, 'bsp', 'Boys School Prefect'),
(2, 'gsp', 'Girls School Prefect'),
(3, 'sp', 'School Prefect'),
(4, 'bcp', 'Boys Compound Prefect'),
(5, 'gcp', 'Girls Compound Prefect'),
(6, 'cp', 'School Compound Prefect'),
(7, 'src', 'School Representative Council'),
(8, 'prot', 'Protocol'),
(9, 'nurse', 'School Infirmarian'),
(10, 'bspt', 'Boys Sport Prefect'),
(11, 'gspt', 'Girls Sports Prefect'),
(12, 'spt', 'Sports Prefect'),
(13, 'bep', 'Boys Entertainment Prefect'),
(14, 'gep', 'Girls Entertainment Prefect'),
(15, 'ep', 'Entertainment Prefect'),
(16, 'chap', 'School Chaplain'),
(17, 'cant', 'Canteen Prefect'),
(18, 'lib', 'School Library');

-- --------------------------------------------------------

--
-- Table structure for table `valid`
--

DROP TABLE IF EXISTS `valid`;
CREATE TABLE IF NOT EXISTS `valid` (
  `id` int(11) NOT NULL,
  `count` int(11) DEFAULT NULL,
  `bsp` int(3) DEFAULT NULL,
  `gsp` int(3) DEFAULT NULL,
  `bcp` int(3) DEFAULT NULL,
  `gcp` int(3) DEFAULT NULL,
  `bspt` int(3) DEFAULT NULL,
  `gspt` int(3) DEFAULT NULL,
  `bep` int(3) DEFAULT NULL,
  `gep` int(3) DEFAULT NULL,
  `chap` int(3) DEFAULT NULL,
  `src` int(3) DEFAULT NULL,
  `nurse` int(3) DEFAULT NULL,
  `cant` int(3) DEFAULT NULL,
  `lib` int(3) DEFAULT NULL,
  `prot` int(3) NOT NULL,
  `sp` int(3) NOT NULL,
  `cp` int(3) NOT NULL,
  `spt` int(3) NOT NULL,
  `ep` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `valid`
--

INSERT INTO `valid` (`id`, `count`, `bsp`, `gsp`, `bcp`, `gcp`, `bspt`, `gspt`, `bep`, `gep`, `chap`, `src`, `nurse`, `cant`, `lib`, `prot`, `sp`, `cp`, `spt`, `ep`) VALUES
(1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `candidate`
--
ALTER TABLE `candidate`
  ADD CONSTRAINT `post_position` FOREIGN KEY (`post`) REFERENCES `position` (`position_shortname`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
