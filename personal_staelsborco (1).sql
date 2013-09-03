-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 03, 2013 at 11:24 PM
-- Server version: 5.5.9
-- PHP Version: 5.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `personal_staelsborco`
--
CREATE DATABASE IF NOT EXISTS `personal_staelsborco` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `personal_staelsborco`;

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tag` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE IF NOT EXISTS `galleries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_nl` varchar(255) NOT NULL,
  `name_fr` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `name_nl`, `name_fr`, `name_en`) VALUES
(3, 'Kak', 'kak', 'kaka'),
(13, 'tatsie', 'pieter', 'thomas'),
(14, 'wwwp', 'wwwp', 'wwwp');

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE IF NOT EXISTS `pictures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gallery_id` int(11) NOT NULL,
  `descr_nl` longtext NOT NULL,
  `descr_fr` longtext NOT NULL,
  `descr_en` longtext NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `gallery_id` (`gallery_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=139 ;

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`id`, `gallery_id`, `descr_nl`, `descr_fr`, `descr_en`, `name`, `size`) VALUES
(102, 3, '', '', '', '0008_130713.jpg', 6362068),
(103, 3, '', '', '', '0011_130713.jpg', 6361292),
(104, 3, '', '', '', '0009_130713.jpg', 5395258),
(105, 3, '', '', '', 'dag2_0103.jpg', 5548673),
(106, 3, '', '', '', 'dag2_0105.jpg', 5672972),
(107, 3, '', '', '', 'dag2_0104.jpg', 5806443),
(108, 3, 'qsdf', 'fdsqf', 'fdsqfd', 'dag3_0216.jpg', 6221865),
(109, 3, '', '', '', 'dag3_0215.jpg', 9797236),
(110, 3, '', '', '', 'dag3_0122.jpg', 6697096),
(111, 3, 'sdfqs', 'fdsq', 'fsqdfq', 'dag3_0123.jpg', 6199942),
(112, 3, 'Astrid', 'Sien', 'Alice', 'dag2_0121.jpg', 7261534),
(113, 3, 'dsqfqsd', 'fdsqf', 'fdsqfsqd', 'dag2_0093.jpg', 5337921),
(129, 13, '', '', '', '0017_130713 (1).jpg', 6346207),
(130, 13, '', '', '', '0018_130713 (1).jpg', 8214847),
(131, 13, '', '', '', '0016_130713 (1).jpg', 10028103),
(132, 13, '', '', '', '0020_130713 (1).jpg', 8097296),
(133, 14, '', '', '', '0009_130713 (1).jpg', 5395258),
(134, 14, '', '', '', '0012_130713 (1).jpg', 5449746),
(135, 14, '', '', '', '0007_130713 (1).jpg', 6509139),
(136, 14, '', '', '', '0010_130713 (1).jpg', 7532889),
(137, 14, '', '', '', '0008_130713 (1).jpg', 6362068),
(138, 14, 'fsdfqsd', 'fdsqf', 'fdsqfqsdf', '0011_130713 (2).jpg', 6361292);

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE IF NOT EXISTS `translations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content_id` int(11) NOT NULL,
  `language` enum('nl','fr','en') NOT NULL,
  `text` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'info@staelsborco.com', '42afddaef64a015073126304f05e043f83fc7a60');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
